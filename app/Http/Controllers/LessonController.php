<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Section;
use App\Models\TestAttempt;
use App\Models\Topic;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LessonController extends Controller
{
    public function home(): View
    {
        $sections = Section::with(['topics.lessons'])->get();

        return view('welcome', compact('sections'));
    }

    public function profile(Request $request): View
    {
        $attempts = $request->user()
            ->testAttempts()
            ->with('test.lesson.topic.section')
            ->latest('completed_at')
            ->get();

        return view('profile', compact('attempts'));
    }

    public function index(): View
    {
        $lessons = Lesson::with('topic.section')->orderBy('topic_id')->orderBy('order')->paginate(10);

        return view('lessons.index', compact('lessons'));
    }

    public function create(): View
    {
        $topics = Topic::with('section')->orderBy('section_id')->orderBy('order')->get();

        return view('lessons.create', compact('topics'));
    }

    public function store(Request $request): RedirectResponse
    {
        $lesson = Lesson::create($this->validatedLesson($request));

        return redirect()
            ->route('lessons.show', $lesson)
            ->with('success', 'Урок успішно додано.');
    }

    public function show(Lesson $lesson): View
    {
        $lesson->load('topic.section', 'test.questions.answers', 'videos');

        return view('lessons.show', compact('lesson'));
    }

    public function checkTest(Request $request, Lesson $lesson): RedirectResponse
    {
        $lesson->load('test.questions.answers');

        if (! $lesson->test) {
            return redirect()
                ->route('lessons.show', $lesson)
                ->withErrors(['test' => 'Для цього уроку ще немає тесту.']);
        }

        $questionIds = $lesson->test->questions->pluck('id');

        $request->validate([
            'answers' => ['required', 'array'],
        ], [
            'answers.required' => 'Оберіть відповіді на всі питання тесту.',
        ]);

        $missingQuestions = $questionIds->filter(fn ($questionId) => ! $request->has("answers.$questionId"));

        if ($missingQuestions->isNotEmpty()) {
            return redirect()
                ->route('lessons.show', $lesson)
                ->withInput()
                ->withErrors(['answers' => 'Потрібно відповісти на всі питання перед перевіркою.']);
        }

        $score = 0;
        $results = [];

        foreach ($lesson->test->questions as $question) {
            $selectedAnswerId = (int) $request->input("answers.$question->id");
            $selectedAnswer = $question->answers->firstWhere('id', $selectedAnswerId);
            $correctAnswer = $question->answers->firstWhere('is_correct', true);
            $isCorrect = $selectedAnswer && $selectedAnswer->is_correct;

            if ($isCorrect) {
                $score++;
            }

            $results[$question->id] = [
                'selected' => $selectedAnswerId,
                'correct' => $correctAnswer?->id,
                'is_correct' => $isCorrect,
            ];
        }

        TestAttempt::create([
            'user_id' => $request->user()->id,
            'test_id' => $lesson->test->id,
            'score' => $score,
            'total' => $lesson->test->questions->count(),
            'answers' => $results,
            'completed_at' => now(),
        ]);

        return redirect()
            ->route('lessons.show', $lesson)
            ->withInput()
            ->with('testResult', [
                'score' => $score,
                'total' => $lesson->test->questions->count(),
                'results' => $results,
            ]);
    }

    public function edit(Lesson $lesson): View
    {
        $topics = Topic::with('section')->orderBy('section_id')->orderBy('order')->get();

        return view('lessons.edit', compact('lesson', 'topics'));
    }

    public function update(Request $request, Lesson $lesson): RedirectResponse
    {
        $lesson->update($this->validatedLesson($request));

        return redirect()
            ->route('lessons.show', $lesson)
            ->with('success', 'Урок успішно оновлено.');
    }

    public function destroy(Lesson $lesson): RedirectResponse
    {
        $lesson->delete();

        return redirect()
            ->route('lessons.index')
            ->with('success', 'Урок видалено.');
    }

    public function lessonsList(int $topic): View
    {
        $topic = Topic::with('lessons')->findOrFail($topic);

        return view('lessonList', compact('topic'));
    }

    public function showSection(string $slug): View
    {
        $section = Section::with(['topics.lessons'])->where('slug', $slug)->firstOrFail();

        return view('SectionShow', compact('section'));
    }

    private function validatedLesson(Request $request): array
    {
        return $request->validate([
            'topic_id' => ['required', 'exists:topics,id'],
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'content' => ['required', 'string', 'min:20'],
            'order' => ['required', 'integer', 'min:1', 'max:1000'],
        ], [
            'topic_id.required' => 'Оберіть тему уроку.',
            'topic_id.exists' => 'Обрана тема не знайдена.',
            'title.required' => 'Вкажіть назву уроку.',
            'title.min' => 'Назва має містити щонайменше 3 символи.',
            'content.required' => 'Заповніть коротке пояснення уроку.',
            'content.min' => 'Пояснення має містити щонайменше 20 символів.',
            'order.required' => 'Вкажіть порядок уроку.',
            'order.integer' => 'Порядок має бути числом.',
            'order.min' => 'Порядок має бути не менше 1.',
        ]);
    }
}

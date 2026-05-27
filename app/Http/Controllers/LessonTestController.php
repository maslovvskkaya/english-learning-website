<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Test;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LessonTestController extends Controller
{
    public function edit(Lesson $lesson): View
    {
        $lesson->load('test.questions.answers');

        return view('tests.edit', compact('lesson'));
    }

    public function update(Request $request, Lesson $lesson): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'questions' => ['required', 'array', 'size:10'],
            'questions.*.question_text' => ['required', 'string', 'min:3'],
            'questions.*.answers' => ['required', 'array', 'size:3'],
            'questions.*.answers.*' => ['required', 'string', 'min:1', 'max:255'],
            'questions.*.correct' => ['required', 'integer', 'between:0,2'],
        ], [
            'title.required' => 'Вкажіть назву тесту.',
            'questions.size' => 'Для уроку потрібно заповнити рівно 10 питань.',
            'questions.*.question_text.required' => 'Заповніть текст кожного питання.',
            'questions.*.answers.size' => 'Кожне питання має мати 3 варіанти відповіді.',
            'questions.*.correct.required' => 'Оберіть правильну відповідь для кожного питання.',
        ]);

        $lesson->test()->delete();
        $test = Test::create([
            'lesson_id' => $lesson->id,
            'title' => $data['title'],
        ]);

        foreach ($data['questions'] as $index => $questionData) {
            $question = $test->questions()->create([
                'question_text' => $questionData['question_text'],
                'type' => 'single',
                'order' => $index + 1,
            ]);

            foreach ($questionData['answers'] as $answerIndex => $answerText) {
                $question->answers()->create([
                    'answer_text' => $answerText,
                    'is_correct' => (int) $questionData['correct'] === $answerIndex,
                ]);
            }
        }

        return redirect()
            ->route('lessons.show', $lesson)
            ->with('success', 'Тест уроку оновлено.');
    }
}

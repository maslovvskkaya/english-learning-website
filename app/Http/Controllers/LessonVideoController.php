<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonVideo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LessonVideoController extends Controller
{
    public function create(Lesson $lesson): View
    {
        return view('videos.create', compact('lesson'));
    }

    public function store(Request $request, Lesson $lesson): RedirectResponse
    {
        $lesson->videos()->create($this->validatedVideo($request));

        return redirect()
            ->route('lessons.show', $lesson)
            ->with('success', 'Відеоурок додано.');
    }

    public function edit(LessonVideo $video): View
    {
        $lessons = Lesson::with('topic')->orderBy('topic_id')->orderBy('order')->get();

        return view('videos.edit', compact('video', 'lessons'));
    }

    public function update(Request $request, LessonVideo $video): RedirectResponse
    {
        $video->update($this->validatedVideo($request, true));

        return redirect()
            ->route('lessons.show', $video->lesson)
            ->with('success', 'Відеоурок оновлено.');
    }

    public function destroy(LessonVideo $video): RedirectResponse
    {
        $lesson = $video->lesson;
        $video->delete();

        return redirect()
            ->route('lessons.show', $lesson)
            ->with('success', 'Відеоурок видалено.');
    }

    private function validatedVideo(Request $request, bool $allowLessonChange = false): array
    {
        $rules = [
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'youtube_url' => ['required', 'url', 'max:255'],
            'description' => ['nullable', 'string', 'max:1000'],
        ];

        if ($allowLessonChange) {
            $rules['lesson_id'] = ['required', 'exists:lessons,id'];
        }

        return $request->validate($rules, [
            'title.required' => 'Вкажіть назву відео.',
            'youtube_url.required' => 'Вставте посилання на YouTube.',
            'youtube_url.url' => 'Посилання має бути коректною URL-адресою.',
            'lesson_id.required' => 'Оберіть урок.',
            'lesson_id.exists' => 'Обраний урок не знайдено.',
        ]);
    }
}

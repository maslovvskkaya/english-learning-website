<?php

namespace Tests\Feature;

use App\Models\Answer;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Role;
use App\Models\Section;
use App\Models\Test;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LessonCheckTest extends TestCase
{
    use RefreshDatabase;

    public function test_test_check_requires_answers(): void
    {
        $lesson = $this->createLessonWithTest();
        $user = $this->createUser();

        $response = $this->actingAs($user)
            ->from(route('lessons.show', $lesson))
            ->post(route('lessons.check', $lesson), []);

        $response->assertRedirect(route('lessons.show', $lesson));
        $response->assertSessionHasErrors('answers');
    }

    public function test_test_check_counts_correct_answers(): void
    {
        $lesson = $this->createLessonWithTest();
        $user = $this->createUser();
        $question = $lesson->test->questions->first();
        $correctAnswer = $question->answers->firstWhere('is_correct', true);

        $response = $this->actingAs($user)->post(route('lessons.check', $lesson), [
            'answers' => [
                $question->id => $correctAnswer->id,
            ],
        ]);

        $response->assertRedirect(route('lessons.show', $lesson));
        $response->assertSessionHas('testResult.score', 1);
        $response->assertSessionHas('testResult.total', 1);
    }

    private function createLessonWithTest(): Lesson
    {
        $section = Section::create([
            'title' => 'Grammar',
            'type' => 'grammar',
            'slug' => 'grammar',
            'description' => 'Grammar lessons',
        ]);

        $topic = Topic::create([
            'section_id' => $section->id,
            'title' => 'Present Simple',
            'order' => 1,
        ]);

        $lesson = Lesson::create([
            'topic_id' => $topic->id,
            'title' => 'Present Simple',
            'content' => 'A short explanation for the lesson.',
            'order' => 1,
        ]);

        $test = Test::create([
            'lesson_id' => $lesson->id,
            'title' => 'Test',
        ]);

        $question = Question::create([
            'test_id' => $test->id,
            'question_text' => 'Choose the correct answer.',
            'type' => 'single',
            'order' => 1,
        ]);

        Answer::create([
            'question_id' => $question->id,
            'answer_text' => 'Correct',
            'is_correct' => true,
        ]);

        Answer::create([
            'question_id' => $question->id,
            'answer_text' => 'Wrong',
            'is_correct' => false,
        ]);

        return $lesson->refresh()->load('test.questions.answers');
    }

    private function createUser(): User
    {
        $user = User::factory()->create();
        $role = Role::create(['name' => 'user']);
        $user->roles()->attach($role);

        return $user;
    }
}

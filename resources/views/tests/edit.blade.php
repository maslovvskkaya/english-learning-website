@extends('layouts.app')

@section('content')
@php
    $existingQuestions = $lesson->test?->questions ?? collect();
@endphp

<div class="container my-5">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <h1 class="h3 fw-bold mb-1">Редагувати тест</h1>
            <p class="text-muted">Урок: {{ $lesson->title }}</p>

            <form method="POST" action="{{ route('lessons.test.update', $lesson) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="form-label">Назва тесту</label>
                    <input id="title" name="title" value="{{ old('title', $lesson->test->title ?? 'Тест: '.$lesson->title) }}" class="form-control @error('title') is-invalid @enderror">
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                @for($i = 0; $i < 10; $i++)
                    @php
                        $question = $existingQuestions->get($i);
                        $answers = $question?->answers ?? collect();
                        $correctIndex = $answers->values()->search(fn ($answer) => $answer->is_correct);
                        $correctIndex = $correctIndex === false ? 0 : $correctIndex;
                    @endphp
                    <div class="border rounded bg-light p-3 mb-3">
                        <h2 class="h6 fw-bold">Питання {{ $i + 1 }}</h2>
                        <div class="mb-3">
                            <input name="questions[{{ $i }}][question_text]" value="{{ old("questions.$i.question_text", $question->question_text ?? '') }}" class="form-control" placeholder="Текст питання" required>
                        </div>
                        <div class="row g-3">
                            @for($j = 0; $j < 3; $j++)
                                <div class="col-md-4">
                                    <label class="form-label">Відповідь {{ $j + 1 }}</label>
                                    <input name="questions[{{ $i }}][answers][{{ $j }}]" value="{{ old("questions.$i.answers.$j", $answers->get($j)->answer_text ?? '') }}" class="form-control" required>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="radio" name="questions[{{ $i }}][correct]" value="{{ $j }}" @checked((int) old("questions.$i.correct", $correctIndex) === $j)>
                                        <label class="form-check-label">Правильна</label>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                @endfor

                @if($errors->any())
                    <div class="alert alert-danger">Перевірте заповнення тесту: потрібно 10 питань, по 3 відповіді і правильний варіант для кожного.</div>
                @endif

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Зберегти тест
                </button>
                <a href="{{ route('lessons.show', $lesson) }}" class="btn btn-outline-secondary">Скасувати</a>
            </form>
        </div>
    </div>
</div>
@endsection

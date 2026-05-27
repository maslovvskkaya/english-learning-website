@extends('layouts.app')

@section('content')
<style>
    .content-box { 
        background: #fff; 
        border-radius: 15px; 
        padding: 30px; 
        margin-bottom: 30px; 
        border-left: 5px solid #0d6efd; 
    }
    .test-box { 
        background: #fff; 
        border: 1px solid #dee2e6; 
        border-radius: 10px; 
        padding: 20px; 
    }
</style>

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="/topic/{{ $lesson->topic_id }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Назад до списку уроків
        </a>
        <span class="badge bg-info text-dark">Урок {{ $lesson->order }}</span>
    </div>

    <h1 class="display-5 fw-bold mb-4 text-primary">{{ $lesson->title }}</h1>

    <div class="content-box shadow-sm">
        {!! $lesson->content !!}
    </div>

    @if($lesson->test)
    <div class="test-box shadow-sm mb-5">
        <h3 class="mb-4"><i class="bi bi-pencil-square"></i> {{ $lesson->test->title }}</h3>
        <hr>
        @foreach($lesson->test->questions as $question)
            <div class="mb-4 border-bottom pb-3">
                <p class="fw-bold">{{ $loop->iteration }}. {{ $question->question_text }}</p>
                @foreach($question->answers as $answer)
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="q{{ $question->id }}" id="ans{{ $answer->id }}">
                        <label class="form-check-label" for="ans{{ $answer->id }}">
                            {{ $answer->answer_text }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <button class="btn btn-success btn-lg">
            <i class="bi bi-check-circle"></i> Перевірити відповіді
        </button>
    </div>
    @endif
</div>
@endsection
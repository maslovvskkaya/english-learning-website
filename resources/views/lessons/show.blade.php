@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('topics.lessons', $lesson->topic) }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Назад до теми
        </a>
        @auth
            @if(Auth::user()->isAdmin())
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('lessons.index') }}" class="btn btn-sm btn-outline-info">
                        <i class="bi bi-table"></i> Таблиця
                    </a>
                    <a href="{{ route('lessons.edit', $lesson) }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil"></i> Редагувати урок
                    </a>
                    <a href="{{ route('lessons.test.edit', $lesson) }}" class="btn btn-sm btn-outline-success">
                        <i class="bi bi-ui-checks"></i> Редагувати тест
                    </a>
                    <a href="{{ route('lessons.videos.create', $lesson) }}" class="btn btn-sm btn-outline-dark">
                        <i class="bi bi-camera-video"></i> Додати відео
                    </a>
                </div>
            @endif
        @endauth
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-primary text-white">Перегляд рядка таблиці</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-2"><strong>ID:</strong> {{ $lesson->id }}</div>
                <div class="col-md-4"><strong>Розділ:</strong> {{ $lesson->topic->section->title }}</div>
                <div class="col-md-4"><strong>Тема:</strong> {{ $lesson->topic->title }}</div>
                <div class="col-md-2"><strong>Порядок:</strong> {{ $lesson->order }}</div>
            </div>
        </div>
    </div>

    <h1 class="display-6 fw-bold mb-4 text-primary">{{ $lesson->title }}</h1>

    <div class="content-box shadow-sm mb-4">
        {!! $lesson->content !!}
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h2 class="h4 fw-bold mb-3">Відеоуроки</h2>
            <div class="row g-4">
                @forelse($lesson->videos as $video)
                    <div class="col-lg-6">
                        <iframe class="video-frame" src="{{ $video->embed_url }}" title="{{ $video->title }}" allowfullscreen></iframe>
                        <div class="d-flex justify-content-between align-items-start mt-2">
                            <div>
                                <h3 class="h6 fw-bold mb-1">{{ $video->title }}</h3>
                                <p class="text-muted small mb-0">{{ $video->description }}</p>
                                <p class="text-muted small mb-0">Урок: {{ $video->lesson->title }}</p>
                            </div>
                            @auth
                                @if(Auth::user()->isAdmin())
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('videos.edit', $video) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('videos.destroy', $video) }}" method="POST" onsubmit="return confirm('Видалити відео?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-muted">До цього уроку ще не додано відео.</div>
                @endforelse
            </div>
        </div>
    </div>

    @if($lesson->test)
        <div class="card border-0 shadow-sm mb-5">
            <div class="card-body p-4">
                <h2 class="h4 mb-4"><i class="bi bi-pencil-square"></i> {{ $lesson->test->title }}</h2>
                @guest
                    <div class="alert alert-warning">
                        Щоб пройти тест, потрібно увійти або зареєструватися.
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-primary">Увійти</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">Зареєструватися</a>
                @else
                    @php
                        $testResult = session('testResult');
                    @endphp

                    @if($errors->has('answers') || $errors->has('test'))
                        <div class="alert alert-danger">
                            {{ $errors->first('answers') ?: $errors->first('test') }}
                        </div>
                    @endif

                    @if($testResult)
                        <div class="alert {{ $testResult['score'] === $testResult['total'] ? 'alert-success' : 'alert-info' }}">
                            Ваш результат: <strong>{{ $testResult['score'] }} з {{ $testResult['total'] }}</strong>
                        </div>
                    @endif

                    <form action="{{ route('lessons.check', $lesson) }}" method="POST">
                        @csrf
                        @foreach($lesson->test->questions as $question)
                            @php
                                $questionResult = $testResult['results'][$question->id] ?? null;
                            @endphp
                            <div class="mb-4 border-bottom pb-3">
                                <p class="fw-bold">{{ $loop->iteration }}. {{ $question->question_text }}</p>
                                @foreach($question->answers as $answer)
                                    @php
                                        $selectedAnswer = (int) old("answers.$question->id") === $answer->id;
                                        $isCorrectAnswer = $questionResult && $questionResult['correct'] === $answer->id;
                                        $isWrongSelected = $questionResult && $questionResult['selected'] === $answer->id && ! $questionResult['is_correct'];
                                        $answerClass = $isCorrectAnswer ? 'text-success fw-semibold' : ($isWrongSelected ? 'text-danger fw-semibold' : '');
                                    @endphp
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}" id="ans{{ $answer->id }}" @checked($selectedAnswer)>
                                        <label class="form-check-label {{ $answerClass }}" for="ans{{ $answer->id }}">
                                            {{ $answer->answer_text }}
                                            @if($isCorrectAnswer)
                                                <span class="badge bg-success ms-2">Правильно</span>
                                            @elseif($isWrongSelected)
                                                <span class="badge bg-danger ms-2">Ваша відповідь</span>
                                            @endif
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        <button class="btn btn-success btn-lg" type="submit">
                            <i class="bi bi-check-circle"></i> Перевірити відповіді
                        </button>
                    </form>
                @endguest
            </div>
        </div>
    @endif
</div>
@endsection
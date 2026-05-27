@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="d-flex align-items-center mb-4">
        <div class="bg-primary text-white p-3 rounded-circle me-3">
            <i class="bi {{ $section->slug === 'grammar' ? 'bi-book' : 'bi-translate' }} h3 mb-0"></i>
        </div>
        <h1 class="fw-bold mb-0">{{ $section->title }}</h1>
    </div>

    <p class="lead text-muted">{{ $section->description }}</p>
    <hr>

    <div class="row mt-4">
        @foreach($section->topics as $topic)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 card-hover">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $topic->title }}</h5>
                        <p class="text-muted small">Кількість уроків: {{ $topic->lessons->count() }}</p>
                        <a href="{{ route('topics.lessons', $topic) }}" class="btn btn-outline-primary w-100 mt-2">
                            Відкрити тему
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

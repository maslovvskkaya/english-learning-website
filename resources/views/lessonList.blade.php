@extends('layouts.app')

@section('content')
<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Головна</a></li>
            <li class="breadcrumb-item active">{{ $topic->title }}</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-lg overflow-hidden">
                <div class="bg-primary text-white p-4 text-center">
                    <h1 class="h3 mb-0">Список уроків: {{ $topic->title }}</h1>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse($topic->lessons as $lesson)
                            <a href="{{ route('lessons.show', $lesson) }}" class="list-group-item list-group-item-action d-flex align-items-center p-4">
                                <div class="rounded-circle bg-light border p-3 me-4 text-primary fw-bold">
                                    {{ $loop->iteration }}
                                </div>
                                <div>
                                    <h5 class="mb-1 fw-bold text-dark">{{ $lesson->title }}</h5>
                                    <small class="text-muted">Відкрий урок, прочитай пояснення та пройди тест.</small>
                                </div>
                                <i class="bi bi-chevron-right ms-auto text-muted"></i>
                            </a>
                        @empty
                            <div class="p-4 text-muted">У цій темі поки немає уроків.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

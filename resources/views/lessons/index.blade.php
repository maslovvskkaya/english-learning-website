@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1">Керування уроками</h1>
            <p class="text-muted mb-0">Таблиця даних з переглядом, додаванням, редагуванням і видаленням.</p>
        </div>
        <a href="{{ route('lessons.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Додати урок
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Розділ</th>
                        <th>Тема</th>
                        <th>Урок</th>
                        <th>Порядок</th>
                        <th class="text-end">Дії</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($lessons as $lesson)
                        <tr>
                            <td>{{ $lesson->id }}</td>
                            <td>{{ $lesson->topic->section->title }}</td>
                            <td>{{ $lesson->topic->title }}</td>
                            <td>{{ $lesson->title }}</td>
                            <td>{{ $lesson->order }}</td>
                            <td class="text-end">
                                <a href="{{ route('lessons.show', $lesson) }}" class="btn btn-sm btn-outline-info">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('lessons.edit', $lesson) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('lessons.destroy', $lesson) }}" method="POST" class="d-inline" onsubmit="return confirm('Видалити цей урок?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">Уроків ще немає.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        {{ $lessons->links() }}
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-4">
            <h1 class="h3 fw-bold">Особистий кабінет</h1>
            <p class="mb-1"><strong>Ім'я:</strong> {{ Auth::user()->name }}</p>
            <p class="mb-1"><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p class="mb-0"><strong>Ролі:</strong> {{ Auth::user()->roles->pluck('name')->join(', ') }}</p>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h4 fw-bold mb-0">Історія проходження тестів</h2>
                <span class="badge bg-primary">{{ $attempts->count() }} спроб</span>
            </div>

            @if($attempts->isEmpty())
                <p class="text-muted mb-0">Ти ще не проходила тести. Відкрий будь-який урок і натисни "Перевірити відповіді".</p>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-primary">
                            <tr>
                                <th>Дата</th>
                                <th>Розділ</th>
                                <th>Тема</th>
                                <th>Урок</th>
                                <th>Результат</th>
                                <th>Відсоток</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($attempts as $attempt)
                                @php
                                    $lesson = $attempt->test->lesson;
                                    $percent = $attempt->total > 0 ? round(($attempt->score / $attempt->total) * 100) : 0;
                                @endphp
                                <tr>
                                    <td>{{ $attempt->completed_at->format('d.m.Y H:i') }}</td>
                                    <td>{{ $lesson->topic->section->title }}</td>
                                    <td>{{ $lesson->topic->title }}</td>
                                    <td>{{ $lesson->title }}</td>
                                    <td><strong>{{ $attempt->score }} / {{ $attempt->total }}</strong></td>
                                    <td>
                                        <div class="progress" style="height: 22px; min-width: 110px;">
                                            <div class="progress-bar {{ $percent >= 70 ? 'bg-success' : ($percent >= 40 ? 'bg-warning text-dark' : 'bg-danger') }}" style="width: {{ $percent }}%">
                                                {{ $percent }}%
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('lessons.show', $lesson) }}" class="btn btn-sm btn-outline-primary">До уроку</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

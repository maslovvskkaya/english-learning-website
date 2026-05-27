@extends('layouts.app')

@section('content')
<div class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Твій шлях до вільної англійської</h1>
        <p class="lead">Обирай граматику або словник, вивчай коротке пояснення і проходь тести.</p>
    </div>
</div>

<section class="py-5" style="background:#f4f8fd;">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 900px;">
            <h2 class="fw-bold display-6 mb-3">Чому англійська мова важлива?</h2>
            <p class="lead text-muted mb-0">
                Англійська - це мова міжнародного спілкування, яка відкриває безліч можливостей у
                кар'єрі, освіті та особистому житті.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-xl-3">
                <div class="card h-100 border rounded-4 shadow-sm p-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-4 mb-4" style="width:70px;height:70px;background:#dbeafe;">
                        <i class="bi bi-globe2 fs-2 text-primary"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Глобальне спілкування</h3>
                    <p class="text-muted mb-0">Понад 1.5 мільярда людей у світі розмовляють англійською мовою</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card h-100 border rounded-4 shadow-sm p-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-4 mb-4" style="width:70px;height:70px;background:#dcfce7;">
                        <i class="bi bi-graph-up-arrow fs-2 text-success"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Кар'єрне зростання</h3>
                    <p class="text-muted mb-0">Знання англійської збільшує ваші шанси на престижну роботу</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card h-100 border rounded-4 shadow-sm p-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-4 mb-4" style="width:70px;height:70px;background:#f3e8ff;">
                        <i class="bi bi-award fs-2" style="color:#7c3aed;"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Доступ до освіти</h3>
                    <p class="text-muted mb-0">Більшість онлайн-курсів та наукових матеріалів доступні англійською</p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card h-100 border rounded-4 shadow-sm p-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-4 mb-4" style="width:70px;height:70px;background:#ffedd5;">
                        <i class="bi bi-people fs-2" style="color:#ea580c;"></i>
                    </div>
                    <h3 class="h5 fw-bold mb-3">Нові знайомства</h3>
                    <p class="text-muted mb-0">Знайомтеся з людьми з різних куточків світу і розширюйте кругозір</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Що ми вивчимо?</h2>
        @auth
            @if(Auth::user()->isAdmin())
                <a href="{{ route('lessons.index') }}" class="btn btn-outline-primary">
                    <i class="bi bi-table"></i> Таблиця уроків
                </a>
            @endif
        @endauth
    </div>

    <div class="row">
        @foreach($sections as $section)
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="h4 text-primary fw-bold mb-3">{{ $section->title }}</h3>
                        <p class="text-muted">{{ $section->description }}</p>
                        <ul class="list-group list-group-flush">
                            @foreach($section->topics as $topic)
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0">
                                    <span><i class="bi bi-check2-circle text-success me-2"></i>{{ $topic->title }}</span>
                                    <a href="{{ route('topics.lessons', $topic) }}" class="btn btn-sm btn-outline-primary rounded-pill">Вчити</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

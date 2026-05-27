@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h1 class="h3 fw-bold mb-4">Редагувати урок</h1>
                    <form action="{{ route('lessons.update', $lesson) }}" method="POST">
                        @method('PUT')
                        @include('lessons._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h1 class="h3 fw-bold mb-4">Додати відеоурок</h1>
                    <form method="POST" action="{{ route('lessons.videos.store', $lesson) }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Урок</label>
                            <input class="form-control" value="{{ $lesson->title }}" disabled>
                        </div>
                        @include('videos.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

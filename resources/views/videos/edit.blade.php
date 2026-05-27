@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h1 class="h3 fw-bold mb-4">Редагувати відеоурок</h1>
                    <form method="POST" action="{{ route('videos.update', $video) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="lesson_id" class="form-label">Урок</label>
                            <select name="lesson_id" id="lesson_id" class="form-select @error('lesson_id') is-invalid @enderror">
                                @foreach($lessons as $lesson)
                                    <option value="{{ $lesson->id }}" @selected(old('lesson_id', $video->lesson_id) == $lesson->id)>
                                        {{ $lesson->topic->title }} / {{ $lesson->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('lesson_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        @include('videos.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

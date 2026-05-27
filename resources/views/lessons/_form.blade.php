@csrf

<div class="mb-3">
    <label for="topic_id" class="form-label">Тема</label>
    <select name="topic_id" id="topic_id" class="form-select @error('topic_id') is-invalid @enderror" required>
        <option value="">Оберіть тему</option>
        @foreach($topics as $topic)
            <option value="{{ $topic->id }}" @selected(old('topic_id', $lesson->topic_id ?? '') == $topic->id)>
                {{ $topic->section->title }} / {{ $topic->title }}
            </option>
        @endforeach
    </select>
    @error('topic_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label for="title" class="form-label">Назва уроку</label>
    <input type="text" name="title" id="title" value="{{ old('title', $lesson->title ?? '') }}" class="form-control @error('title') is-invalid @enderror" required>
    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label for="content" class="form-label">Коротке пояснення або переклад</label>
    <textarea name="content" id="content" rows="10" class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $lesson->content ?? '') }}</textarea>
    <div class="form-text">Можна використовувати HTML: списки, таблиці, виділення.</div>
    @error('content')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-4">
    <label for="order" class="form-label">Порядок</label>
    <input type="number" name="order" id="order" min="1" value="{{ old('order', $lesson->order ?? 1) }}" class="form-control @error('order') is-invalid @enderror" required>
    @error('order')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="d-flex gap-2">
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save"></i> Зберегти
    </button>
    <a href="{{ route('lessons.index') }}" class="btn btn-outline-secondary">Скасувати</a>
</div>

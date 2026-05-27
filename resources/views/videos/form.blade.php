<div class="mb-3">
    <label for="title" class="form-label">Назва відео</label>
    <input id="title" name="title" value="{{ old('title', $video->title ?? '') }}" class="form-control @error('title') is-invalid @enderror" required>
    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label for="youtube_url" class="form-label">Посилання YouTube</label>
    <input id="youtube_url" name="youtube_url" type="url" value="{{ old('youtube_url', $video->youtube_url ?? '') }}" class="form-control @error('youtube_url') is-invalid @enderror" required>
    @error('youtube_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="mb-4">
    <label for="description" class="form-label">Опис</label>
    <textarea id="description" name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{ old('description', $video->description ?? '') }}</textarea>
    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
</div>

<div class="d-flex gap-2">
    <button class="btn btn-primary" type="submit">
        <i class="bi bi-save"></i> Зберегти
    </button>
    <a href="{{ route('lessons.show', $video->lesson ?? $lesson) }}" class="btn btn-outline-secondary">Скасувати</a>
</div>

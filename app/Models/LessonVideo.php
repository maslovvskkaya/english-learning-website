<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonVideo extends Model
{
    protected $fillable = ['lesson_id', 'title', 'youtube_url', 'description'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function getEmbedUrlAttribute(): string
    {
        if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([A-Za-z0-9_-]+)/', $this->youtube_url, $matches)) {
            return 'https://www.youtube.com/embed/'.$matches[1];
        }

        return $this->youtube_url;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $fillable = ['topic_id', 'title', 'content', 'order'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function test()
    {
        return $this->hasOne(Test::class);
    }

    public function videos()
    {
        return $this->hasMany(LessonVideo::class);
    }
}

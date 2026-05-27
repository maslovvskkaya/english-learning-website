<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $table = 'topics';

    protected $fillable = ['section_id', 'title', 'order'];

    // Тема належить до одного розділу
    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    // Одна тема має багато уроків
    public function lessons()
    {
        return $this->hasMany(Lesson::class)->orderBy('order');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = ['test_id', 'question_text', 'type', 'order'];

    // Питання належить до одного тесту
    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    // Питання має багато варіантів відповідей
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    // Отримати правильну відповідь
    public function correctAnswer()
    {
        return $this->hasOne(Answer::class)->where('is_correct', true);
    }
}

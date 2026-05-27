<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'sections';

    protected $fillable = ['title', 'type', 'slug', 'description'];

    // Один розділ має багато тем
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LessonTestController;
use App\Http\Controllers\LessonVideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LessonController::class, 'home'])->name('home');
Route::get('/topic/{topic}', [LessonController::class, 'lessonsList'])->name('topics.lessons');
Route::get('/section/{slug}', [LessonController::class, 'showSection'])->name('sections.show');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/lessons/{lesson}/check', [LessonController::class, 'checkTest'])->name('lessons.check');
    Route::get('/profile', [LessonController::class, 'profile'])->name('profile');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('lessons', LessonController::class)->except(['show']);
    Route::get('/lessons/{lesson}/test/edit', [LessonTestController::class, 'edit'])->name('lessons.test.edit');
    Route::put('/lessons/{lesson}/test', [LessonTestController::class, 'update'])->name('lessons.test.update');
    Route::resource('lessons.videos', LessonVideoController::class)
        ->parameters(['videos' => 'video'])
        ->except(['index', 'show'])
        ->shallow();
});

Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lessons.show');

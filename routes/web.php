<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

/**
 * Authentication
 */
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');
/**
 *
 */

Route::get('/', function () {
    $featuredProjects = Project::with('tags', 'user')->where('featured', true)->get();
    $projects = Project::with('tags', 'user')->simplePaginate(10);
    $tags = Tag::all();

    return view('welcome', [
            'featuredProjects' => $featuredProjects,
            'projects' => $projects,
            'tags' => $tags,
    ]);
})->name('dashboard');

Route::resource('project', ProjectController::class, [
    'except' => ['update']
]);

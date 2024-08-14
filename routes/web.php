<?php

use App\Http\Controllers\ProjectController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/', function () {
    $featuredProjects = Project::with('tags', 'user')->where('featured', true)->get();
    $projects = Project::with('tags', 'user')->simplePaginate(10);
    $tags = Tag::all();

    return view('welcome', [
            'featuredProjects' => $featuredProjects,
            'projects' => $projects,
            'tags' => $tags,
    ]);
});

Route::resource('project', ProjectController::class, [
    'except' => ['update']
]);

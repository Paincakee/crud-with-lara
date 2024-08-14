<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/', function () {
    $featuredProjects = Project::with('tags')->where('featured', true)->get();
    $projects = Project::with('tags')->simplePaginate(10);
    $tags = Tag::all();

    return view('welcome', [
            'featuredProjects' => $featuredProjects,
            'projects' => $projects,
            'tags' => $tags,
    ]);
});

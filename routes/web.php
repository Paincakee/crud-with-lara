<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/', function () {

    $projects = Project::all();

    return view('welcome', [
            'projects' => $projects
    ]);
});

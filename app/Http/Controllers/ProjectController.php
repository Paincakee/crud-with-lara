<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('tags', 'user')->simplePaginate(15);

        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function show(Project $project)
    {
        return $project->user;
    }
}

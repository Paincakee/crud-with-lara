<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::with('tags', 'user', 'user.roles');

        // Check if the 'tag' query parameter is present
        if ($request->has('tag')) {
            $tag = $request->input('tag');

            // Filter projects by the tag
            $projects = $projects->whereHas('tags', function ($query) use ($tag) {
                $query->where('name', $tag);
            });
        }

        // Paginate the results and append the 'tag' query parameter
        $projects = $projects->simplePaginate(15)->appends(['tag' => $request->input('tag')]);

        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function show(Project $project)
    {
        return $project->user;
    }
}

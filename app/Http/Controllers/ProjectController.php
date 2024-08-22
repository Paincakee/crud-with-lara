<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tag;
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

    public function create()
    {
        $tags = Tag::all();

        return view('projects.create', [
            'tags' => $tags
        ]);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'featured' => ['nullable'], // No need for 'boolean' validation here
            'tags' => ['required', 'array'], // Ensure tags is an array
            'tags.*' => ['exists:tags,id'], // Ensure each tag exists in the tags table
        ]);

        // Convert the checkbox value to boolean
        $validated['featured'] = $request->has('featured');

        // Add the current user's ID to the validated data
        $validated['user_id'] = auth()->id();

        // Create the Project without tags
        $project = Project::create($validated);

        // Attach tags to the project
        $project->tags()->attach($validated['tags']);

        // Redirect to the projects index page
        return redirect()->route('project.index');
    }


}

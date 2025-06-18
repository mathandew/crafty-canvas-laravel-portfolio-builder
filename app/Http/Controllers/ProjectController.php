<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id', auth()->id())->with('skills')->get();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $skills = Skill::all();
        return view('projects.create', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'project_duration' => 'required|string',
            'website_link' => 'string',
            'skill_ids' => 'required|array',
            'skill_ids.*' => 'exists:skills,id',
            'project_image' => 'required|image|mimes:jpeg,png,jpg,gif,PNG|max:2048', // Validate the image

        ]);

        $imageName = time() . '.' . $request->project_image->extension(); // Create a unique name for the image
    $request->project_image->move(public_path('project_images'), $imageName); // Move the image to the public folder


        $project = Project::create([
            'user_id' => auth()->id(),
            'project_name' => $request->project_name,
            'project_description' => $request->project_description,
            'project_duration' => $request->project_duration,
            'website_link' => $request->website_link,
            'image' => $imageName,
        ]);

        $project->skills()->attach($request->skill_ids);

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    public function edit($id)
    {
        $project = Project::with('skills')->findOrFail($id);
        $skills = Skill::all();
        return view('projects.edit', compact('project', 'skills'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'project_duration' => 'required|string',
            'skill_ids' => 'required|array',
            'skill_ids.*' => 'exists:skills,id',
        ]);

        $project = Project::findOrFail($id);
        $project->update([
            'project_name' => $request->project_name,
            'project_description' => $request->project_description,
            'project_duration' => $request->project_duration,
            'website_link' => $request->website_link,
        ]);

        $project->skills()->sync($request->skill_ids);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->skills()->detach();
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}

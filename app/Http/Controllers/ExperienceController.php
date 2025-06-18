<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Skill;

class ExperienceController extends Controller
{
    // Display a list of experiences
    public function index()
    {
        $experiences = Experience::where('user_id', auth()->id())->with(['service', 'skills'])->get();
        return view('experience.index', compact('experiences'));
    }

    // Show the form to create a new experience
    public function create()
    {
        $services = Service::where('user_id', auth()->id())->get();
        $skills = Skill::where('user_id', auth()->id())->get();
        return view('experience.create', compact('services', 'skills'));
    }

    // Store a new experience
    public function store(Request $request)
{
    $request->validate([
        'designation' => 'required|string|max:255',
        'organization_name' => 'required|string|max:255',
        'service_id' => 'required|exists:services,id',
        'skill_ids' => 'required|array',
        'skill_ids.*' => 'exists:skills,id',
    ]);

    $experience = Experience::create([
        'user_id' => auth()->id(),
        'designation' => $request->designation,
        'organization_name' => $request->organization_name,
        'service_id' => $request->service_id,
    ]);

    $experience->skills()->attach($request->skill_ids); // Attach the selected skills

    return redirect()->route('experience.index')->with('success', 'Experience added successfully!');
}


    // Show the form to edit an experience
    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        $services = Service::where('user_id', auth()->id())->get();
        $skills = Skill::where('user_id', auth()->id())->get();
        return view('experience.edit', compact('experience', 'services', 'skills'));
    }

    // Update an experience
    public function update(Request $request, $id)
{
    $request->validate([
        'designation' => 'required|string|max:255',
        'organization_name' => 'required|string|max:255',
        'service_id' => 'required|exists:services,id',
        'skill_ids' => 'required|array',
        'skill_ids.*' => 'exists:skills,id',
    ]);

    $experience = Experience::findOrFail($id);
    $experience->update([
        'designation' => $request->designation,
        'organization_name' => $request->organization_name,
        'service_id' => $request->service_id,
    ]);

    $experience->skills()->sync($request->skill_ids); // Sync the selected skills

    return redirect()->route('experience.index')->with('success', 'Experience updated successfully!');
}

    // Delete an experience
    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return redirect()->route('experience.index')->with('success', 'Experience deleted successfully!');
    }
}


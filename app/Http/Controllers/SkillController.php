<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    // Display a list of skills
    public function index()
    {
        $skills = Skill::where('user_id', auth()->id())->get();
        return view('skills.index', compact('skills'));
    }

    // Show the form to create a new skill
    public function create()
    {
        return view('skills.create');
    }

    // Store a new skill
    public function store(Request $request)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
            'skill_level' => 'required|in:basic,intermediate,expert',
        ]);

        Skill::create([
            'user_id' => auth()->id(),
            'skill_name' => $request->skill_name,
            'skill_level' => $request->skill_level,
        ]);

        return redirect()->route('skills.index')->with('success', 'Skill added successfully!');
    }

    // Show the form to edit a skill
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('skills.edit', compact('skill'));
    }

    // Update a skill
    public function update(Request $request, $id)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
            'skill_level' => 'required|in:basic,intermediate,expert',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update([
            'skill_name' => $request->skill_name,
            'skill_level' => $request->skill_level,
        ]);

        return redirect()->route('skills.index')->with('success', 'Skill updated successfully!');
    }

    // Delete a skill
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill deleted successfully!');
    }
}

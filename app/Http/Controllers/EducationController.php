<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Education;


class EducationController extends Controller
{
    public function index(){
        $educations = Education::where('user_id', auth()->id())->get();
        return view('education.index', compact('educations'));
    }
    public function create(){
        return view('education.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'institute_name' => 'required|string|max:255',
        'institute_city' => 'required|string|max:255',
        'institute_country' => 'required|string|max:255',
        'institute_address' => 'required|string|max:255',
        'enrolled_year' => 'required|integer',
        'passing_year' => 'required|integer',
        'result' => 'required|string|max:255',
    ]);

    // Create a new education entry
    Education::create([
        'user_id' => auth()->id(), // Assuming the user is authenticated
        'title' => $request->title,
        'institute_name' => $request->institute_name,
        'institute_city' => $request->institute_city,
        'institute_country' => $request->institute_country,
        'institute_address' => $request->institute_address,
        'enrolled_year' => $request->enrolled_year,
        'passing_year' => $request->passing_year,
        'result' => $request->result,
    ]);

    return redirect()->route('education.index')->with('success', 'Education added successfully!');
}

public function edit($id)
    {
        $education = Education::findOrFail($id);
        return view('education.edit', compact('education'));
    }

    // Update an education entry
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'institute_name' => 'required|string|max:255',
            'institute_city' => 'required|string|max:255',
            'institute_country' => 'required|string|max:255',
            'institute_address' => 'required|string|max:255',
            'enrolled_year' => 'required|integer',
            'passing_year' => 'required|integer',
            'result' => 'required|string|max:255',
        ]);

        $education = Education::findOrFail($id);
        $education->update([
            'title' => $request->title,
            'institute_name' => $request->institute_name,
            'institute_city' => $request->institute_city,
            'institute_country' => $request->institute_country,
            'institute_address' => $request->institute_address,
            'enrolled_year' => $request->enrolled_year,
            'passing_year' => $request->passing_year,
            'result' => $request->result,
        ]);

        return redirect()->route('education.index')->with('success', 'Education updated successfully!');
    }

    // Delete an education entry
    public function destroy($id)
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('education.index')->with('success', 'Education deleted successfully!');
    }

}

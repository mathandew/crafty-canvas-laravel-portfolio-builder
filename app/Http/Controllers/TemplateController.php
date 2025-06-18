<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Template;
use App\Models\User;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;

use PDF;


class TemplateController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $templates = Template::all();
        $userTemplate = $user->templates()->where('user_id', $user->id)->first();


        return view('templates.index', compact('templates', 'userTemplate'));
    }

    public function select(Template $template)
{
    $user = Auth::user();

    $user->templates()->detach();

    $user->templates()->attach($template->id, [
        'color' => 'default', 
        'background' => 'default',
        'education' => true,
        'experience' => false,
        'skills' => false,
        'services' => false,
        'projects' => false,
    ]);

    return redirect()->route('templates.customize', $template->id)->with('success', 'Template selected successfully.');
}

public function customize($templateId)
{
    $user = Auth::user();
    $template = Template::findOrFail($templateId);
    
    $userTemplate = $user->templates()->where('template_id', $templateId)->first();

    return view('templates.customize', compact('template', 'userTemplate'));
}

public function updateCustomization(Request $request, $templateId)
{
    $user = Auth::user();

    $user->templates()->updateExistingPivot($templateId, [
        'color' => $request->color,
        'background' => $request->background,
        'education' => $request->has('education'),
        'experience' => $request->has('experience'),
        'skills' => $request->has('skills'),
        'services' => $request->has('services'),	
        'projects' => $request->has('projects'),
    ]);

    return redirect()->route('templates.index')->with('success', 'Template customized successfully.');
}

public function view($id) {
    $template = Template::findOrFail($id);

    // dd( $template);

    if (!$template) {
        abort(404, 'Template not found');
    }

    $user = Auth::user();
    $skills = Skill::where('user_id', auth()->id())->get();
    $services = Service::where('user_id', auth()->id())->get();
    $education = Education::where('user_id', auth()->id())->first();
    $educations = Education::where('user_id', auth()->id())->get();
    $projects = Project::where('user_id', auth()->id())->get();
    $experiences = Experience::with('service')->where('user_id', auth()->id())->get();

    $userTemplate = $user->templates()->where('template_id', $template->id)->get();
    
    if ($template->type === 'simple') {
        return view('templates.portfolios.simple.index', compact('template', 'skills', 'services', 'user', 'education', 'projects', 'educations', 'experiences', 'userTemplate'));

    } elseif ($template->type === 'moonlight') {
        $count = $projects->count();
        return view('templates.portfolios.moonlight.index', compact('template', 'skills', 'services', 'user', 'education', 'projects', 'count', 'experiences', 'userTemplate'));
    } elseif ($template->type === 'advance'){
        $count = $projects->count();
        $skills_count = $skills->count();
        $services_count = $services->count();
    return view('templates.portfolios.advance.index', compact('template', 'skills', 'services', 'user', 'educations', 'projects', 'experiences', 'count', 'skills_count', 'services_count', 'userTemplate'));
}

    // Add more conditions as needed or return a default view

    abort(404, 'Template type not recognized');
}


public function downloadPDF()
{
    $user = Auth::user();
    $skills = Skill::where('user_id', auth()->id())->get();
    $services = Service::where('user_id', auth()->id())->get();
    $education = Education::where('user_id', auth()->id())->first();
    $educations = Education::where('user_id', auth()->id())->get();
    $projects = Project::where('user_id', auth()->id())->get();
    $experiences = Experience::with('service')->where('user_id', auth()->id())->get();

    // Pass all data to the view
    $data = compact('user', 'skills', 'services', 'education', 'educations', 'projects', 'experiences');

    // Generate PDF
    $pdf = PDF::loadView('pdf_view', $data);

    // Download the PDF with a custom filename
    return $pdf->download('user-profile.pdf');
}



}

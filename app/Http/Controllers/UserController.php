<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Skill;
use App\Models\Service;
use App\Models\Project;
use App\Models\Education;
use App\Models\Experience;

class UserController extends Controller
{
    public function index(){
        $skills = Skill::where('user_id', auth()->id())->get()->count();
    $services = Service::where('user_id', auth()->id())->get()->count();
    // $education = Education::where('user_id', auth()->id())->first();
    // $educations = Education::where('user_id', auth()->id())->get();
    $projects = Project::where('user_id', auth()->id())->get()->count();
    $experiences = Experience::with('service')->where('user_id', auth()->id())->get();


    $totalMonths = 0;

foreach ($experiences as $experience) {
    $duration = $experience->duration; // e.g., "6 months", "1 year", "3 months"
    
    // Regular expression to match the duration
    preg_match('/(\d+)\s*(year|years|month|months)/', $duration, $matches);

    if ($matches) {
        $value = (int)$matches[1];
        $unit = strtolower($matches[2]);
        
        // Convert the duration to months
        if (strpos($unit, 'year') !== false) {
            $totalMonths += $value * 12; // 1 year = 12 months
        } else {
            $totalMonths += $value; // month
        }
    }
}

$years = floor($totalMonths / 12);

// Now you have the total duration in months
// return $totalMonths;

        return view('admin.index', compact('skills', 'services', 'projects', 'years'));
    }
}

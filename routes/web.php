<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('admin/dashboard', [UserController::class, 'index'])->name('admin.dashboard');

    Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');
    Route::post('/templates/select/{template}', [TemplateController::class, 'select'])->name('templates.select');
    Route::get('/templates/customize/{templateId}', [TemplateController::class, 'customize'])->name('templates.customize');
    Route::post('/templates/customize/{templateId}', [TemplateController::class, 'updateCustomization'])->name('templates.updateCustomization');

    Route::get('/templates/view/{id}', [TemplateController::class, 'view'])->name('templates.view');
});

require __DIR__ . '/auth.php';


route::get('education/create', [EducationController::class, 'create']);
Route::post('education', [EducationController::class, 'store'])->name('education.store');
Route::get('education', [EducationController::class, 'index'])->name('education.index');
Route::get('education/{id}/edit', [EducationController::class, 'edit'])->name('education.edit');
Route::put('education/{id}', [EducationController::class, 'update'])->name('education.update');

Route::delete('education/{id}', [EducationController::class, 'destroy'])->name('education.destroy');

// Display a list of services
Route::get('services', [ServiceController::class, 'index'])->name('services.index')->middleware(['auth', 'verified']);

// Show the form to create a new service
Route::get('services/create', [ServiceController::class, 'create'])->name('services.create')->middleware(['auth', 'verified']);

// Store a new service
Route::post('services', [ServiceController::class, 'store'])->name('services.store')->middleware(['auth', 'verified']);

// Show the form to edit a service
Route::get('services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit')->middleware(['auth', 'verified']);

// Update a service
Route::put('services/{id}', [ServiceController::class, 'update'])->name('services.update')->middleware(['auth', 'verified']);

// Delete a service
Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy')->middleware(['auth', 'verified']);

// Display a list of skills
Route::get('skills', [SkillController::class, 'index'])->name('skills.index')->middleware(['auth', 'verified']);

// Show the form to create a new skill
Route::get('skills/create', [SkillController::class, 'create'])->name('skills.create')->middleware(['auth', 'verified']);

// Store a new skill
Route::post('skills', [SkillController::class, 'store'])->name('skills.store')->middleware(['auth', 'verified']);

// Show the form to edit a skill
Route::get('skills/{id}/edit', [SkillController::class, 'edit'])->name('skills.edit')->middleware(['auth', 'verified']);

// Update a skill
Route::put('skills/{id}', [SkillController::class, 'update'])->name('skills.update')->middleware(['auth', 'verified']);

// Delete a skill
Route::delete('skills/{id}', [SkillController::class, 'destroy'])->name('skills.destroy')->middleware(['auth', 'verified']);


// Display a list of experiences
Route::get('experience', [ExperienceController::class, 'index'])->name('experience.index')->middleware(['auth', 'verified']);

// Show the form to create a new experience
Route::get('experience/create', [ExperienceController::class, 'create'])->name('experience.create')->middleware(['auth', 'verified']);

// Store a new experience
Route::post('experience', [ExperienceController::class, 'store'])->name('experience.store')->middleware(['auth', 'verified']);

// Show the form to edit an experience
Route::get('experience/{id}/edit', [ExperienceController::class, 'edit'])->name('experience.edit')->middleware(['auth', 'verified']);

// Update an experience
Route::put('experience/{id}', [ExperienceController::class, 'update'])->name('experience.update')->middleware(['auth', 'verified']);

// Delete an experience
Route::delete('experience/{id}', [ExperienceController::class, 'destroy'])->name('experience.destroy')->middleware(['auth', 'verified']);




// Display a list of projects
Route::get('projects', [ProjectController::class, 'index'])->name('projects.index')->middleware(['auth', 'verified']);

// Show the form to create a new project
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create')->middleware(['auth', 'verified']);

// Store a new project
Route::post('projects', [ProjectController::class, 'store'])->name('projects.store')->middleware(['auth', 'verified']);

// Show the form to edit a project
Route::get('projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit')->middleware(['auth', 'verified']);

// Update a project
Route::put('projects/{id}', [ProjectController::class, 'update'])->name('projects.update')->middleware(['auth', 'verified']);

// Delete a project
Route::delete('projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy')->middleware(['auth', 'verified']);


Route::get('/download-pdf', [TemplateController::class, 'downloadPDF'])->name('download.pdf');

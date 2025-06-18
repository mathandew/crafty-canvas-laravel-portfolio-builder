<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use Illuminate\Support\Facades\Log;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    Log::info('Updating user profile', $request->validated());

    $user = $request->user(); // Get the authenticated user
    $user->fill($request->validated()); // Fill user with validated data

    if ($user->isDirty('email')) {
        $user->email_verified_at = null; // If email changed, reset verification timestamp
    }

    // Handle image upload
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('profile_images', 'public'); // Store image in 'storage/app/public/profile_images'
        $user->image = $imagePath; // Save image path in user model
    }

    try {
        $user->save(); // Attempt to save changes
    } catch (\Exception $e) {
        Log::error('Error updating user: ' . $e->getMessage());
        return back()->withErrors(['update' => 'Failed to update profile.']);
    }

    return Redirect::route('profile.edit')->with('status', 'profile-updated');
}


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

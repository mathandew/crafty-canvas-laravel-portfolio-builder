<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    // Display a list of services
    public function index()
    {
        $services = Service::where('user_id', auth()->id())->get();
        return view('services.index', compact('services'));
    }

    // Show the form to create a new service
    public function create()
    {
        return view('services.create');
    }

    // Store a new service
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
        ]);

        Service::create([
            'user_id' => auth()->id(),
            'service_name' => $request->service_name,
        ]);

        return redirect()->route('services.index')->with('success', 'Service added successfully!');
    }

    // Show the form to edit a service
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    // Update a service
    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required|string|max:255',
        ]);

        $service = Service::findOrFail($id);
        $service->update([
            'service_name' => $request->service_name,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully!');
    }

    // Delete a service
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully!');
    }
}

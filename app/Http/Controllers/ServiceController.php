<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();

        // return $services;
        return view('admin.allservice.listservice', compact('services'));
    }

    public function add()
    {
        return view('admin.allservice.addservice');
    }

    public function store(Request $request)
    {
        // return $request->all();

        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);
        // return $imageName;
        Service::create([
            'name' => $request->service_name,
            'description' => $request->description,
            // 'image'=>$imageName,
            'status' => '1',
        ]);

        return redirect()->route('service.index')->with('success', 'Service added successfully.');
    }

    public function updateStatus($id)
    {

        $service = Service::findOrFail($id);

        $service->status = $service->status == 1 ? 0 : 1;
        $service->save();

        return redirect()->route('service.index')->with('success', 'Status updated successfully.');
    }

    public function edit($id)
    {
        // return $id;
        $service = Service::findOrFail($id); // Fetch service by ID
        // return $service;

        return view('admin.allservice.editservice', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $service->name = $request->service_name;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('service.index')->with('success', 'Service updated successfully.');
    }
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Service deleted successfully.');
    }
}
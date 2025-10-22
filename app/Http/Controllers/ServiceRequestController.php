<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\ServiceRequest;
use App\Models\User;
use App\Models\VenderDetails;

class ServiceRequestController extends Controller
{
    //
    public function storeServiceRequest(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'pin_code' => 'required',
            'service_id' => 'required',
        ]);

        $serviceRequest = new ServiceRequest();
        $serviceRequest->role_id = 3;
        $serviceRequest->service_id = $request->service_id;
        $serviceRequest->name = $request->name;
        $serviceRequest->phone = $request->phone;
        $serviceRequest->city = $request->city;
        $serviceRequest->pin_code = $request->pin_code;
        $serviceRequest->save();


        // $request->user()->service_requests()->create($request->all());
        return redirect()->route('home');
    }
    public function serviceRequestList()
    {
        $serviceRequests = ServiceRequest::with(['service', 'transferUser'])->get();
        $venders = VenderDetails::with('user')->get();
    // return $venders;
        return view('admin.service_request_index',compact('serviceRequests','venders'));
    }
    public function serviceTransfer(Request $request, $id)
    {
        // return $request->all();
        $serviceRequest = ServiceRequest::find($id);
        $serviceRequest->transfer_at = $request->transfer_at;
        $serviceRequest->save();
        return redirect()->route('service.request.list')->with('success', 'Service request transferred successfully!');
    }
}

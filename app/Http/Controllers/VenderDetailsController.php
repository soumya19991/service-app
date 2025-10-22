<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VenderDetails;
use Illuminate\Http\Request;
use App\Models\Service;
// use App\models\venderDetails;

class VenderDetailsController extends Controller
{
    public function storeVender(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'phone' => 'required',
            'pincode' => 'required',
            'city' => 'required',
            'service' => 'required|exists:services,id',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 2,
            'password' => bcrypt($request->password),
        ]);

        VenderDetails::create([
            'user_id' => User::latest()->first()->id,
            'service_id' => $request->service,
            'mobile_number' => $request->phone,
            'pin_code' => $request->pincode,
            'city' => $request->city,
        ]);

        return redirect()->back()->with('success', 'Vender details saved successfully.');
    }
    public function venderList()
    {
        $vendors = VenderDetails::with(['user', 'service'])->orderBy('id', 'asc')->paginate(10);
        // return $vendors;
        return view('admin.venderindex', compact('vendors'));
    }
}
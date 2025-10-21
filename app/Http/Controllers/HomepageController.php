<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class HomepageController extends Controller
{
    //
    public function index()
    {
          $services = Service::where('status', 1)->get();
         $popularServices = Service::where('popular', 1)
                          ->where('status', 1)
                          ->get();
        //   return ($services);
        return view('frontend.home', compact('services', 'popularServices'));
        
    }
}
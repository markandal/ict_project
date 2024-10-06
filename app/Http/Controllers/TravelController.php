<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class TravelController extends Controller
{
    public function index()
    {
        // Get all packages
        $packages = Package::all();

        return view('content.packages', compact('packages'));
    }
}

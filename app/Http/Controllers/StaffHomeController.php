<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffHomeController extends Controller
{
    public function index()
    {
        return view('staff.s-home'); // Ensure this view exists
    }
}


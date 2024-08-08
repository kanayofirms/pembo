<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->is_role == 1) { //admin authorization
            return view('admin.dashboard.list');
        } else if (Auth::user()->is_role == 0) { //staff authorization
            return view('admin.staff.list');
        }
    }
}

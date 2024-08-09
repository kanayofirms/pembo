<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StaffController extends Controller
{
    public function index(Request $request)
    {
        $data['getRecord'] = User::getAllRecord();
        return view('admin.staff.list', $data);
    }

    public function add(Request $request)
    {
        return view('admin.staff.add');
    }
}

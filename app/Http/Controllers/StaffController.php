<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Str;


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

    public function add_post(Request $request)
    {
        // dd($request->all());

        $save = new User;
        $save->name = trim($request->name);
        $save->last_name = trim($request->last_name);
        $save->surname = trim($request->surname);
        $save->email = trim($request->email);
        $save->phone_number = trim($request->phone_number);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->is_role = trim($request->is_role);

        if (!empty($request->file('profile_image'))) {
            $file = $request->file('profile_image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('upload/profile/', $filename);
            $save->profile_image = $filename;
        }
        $save->save();

        return redirect('admin/staff/list')->with('success', "My Account Successfully Created.");
    }
}

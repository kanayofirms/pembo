<?php

namespace App\Http\Controllers;

use App\Mail\StaffNewAccountCreateMail;
use Illuminate\Http\Request;
use App\Models\User;
use Str;
use Hash;
use File;
use Mail;


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

    public function store(Request $request)
    {
        // dd($request->all());

        $save = request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|unique:users',
            'is_role' => 'required',
            'password' => 'required'
        ]);

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
        $save->remember_token = Str::random(50);
        $random_password = $request->password;
        $save->password = Hash::make($random_password);

        $save->save();

        $save->random_password = $random_password;
        Mail::to($save->email)->send(new StaffNewAccountCreateMail($save));

        return redirect('admin/staff/list')->with('success', "My Account Successfully Created.");
    }


    public function edit(Request $request, $id)
    {
        $data['getRecord'] = User::getSingleUser($id);
        return view('admin.staff.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $save = request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'is_role' => 'required',
        ]);

        $save = User::getSingleUser($id);
        $save->name = trim($request->name);
        $save->last_name = trim($request->last_name);
        $save->surname = trim($request->surname);
        $save->email = trim($request->email);
        $save->phone_number = trim($request->phone_number);
        $save->date_of_birth = trim($request->date_of_birth);
        $save->is_role = trim($request->is_role);

        if (!empty($request->file('profile_image'))) {
            if (!empty($save->profile_image) && file_exists('upload/profile/' . $save->profile_image)) {
                unlink('upload/profile/' . $save->profile_image);
            }
            $file = $request->file('profile_image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('upload/profile/', $filename);
            $save->profile_image = $filename;
        }
        $save->remember_token = Str::random(50);
        $save->save();

        return redirect('admin/staff/list')->with('success', "My Account Successfully Updated.");
    }

    public function view($id)
    {
        $data['getRecord'] = User::getSingleUser($id);
        return view('admin.staff.view', $data);
    }

    public function destroy(Request $request, $id)
    {
        $getRecordDelete = User::getSingleUser($id);
        $getRecordDelete->is_delete = 1;
        $getRecordDelete->save();
        // $getRecordDelete->delete();

        return redirect()->back()->with('success', "Record successfully deleted.");
    }

}

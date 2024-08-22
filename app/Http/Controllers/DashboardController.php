<?php

namespace App\Http\Controllers;

use App\Models\LoanTypesModel;
use App\Models\LoanPlanModel;
use App\Models\LoanModel;
use App\Models\LoanUserModel;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Str;
use Hash;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->is_role == 1) { //admin authorization
            $data['getStaffandAdminCount'] = User::count();
            $data['getLoanTypeCount'] = LoanTypesModel::count();
            $data['getLoanPlanCount'] = LoanPlanModel::count();
            $data['getLoanCount'] = LoanModel::count();
            $data['getLoanUserCount'] = LoanUserModel::count();

            return view('admin.dashboard.list', $data);
        } else if (Auth::user()->is_role == 0) { //staff authorization
            return view('admin.admin_staff.dashboard');
        }
    }

    public function profile(Request $request)
    {
        $data['getRecord'] = User::find(Auth::user()->id);
        return view('admin.profile.update', $data);
    }

    public function update(Request $request)
    {
        $save = request()->validate([
            'email' => 'required|unique:users,email,' . Auth::user()->id
        ]);
        $save = User::find(Auth::user()->id);
        $save->name = trim($request->name);
        $save->last_name = trim($request->last_name);
        $save->surname = trim($request->surname);
        $save->email = trim($request->email);
        $save->phone_number = trim($request->phone_number);
        $save->date_of_birth = trim($request->date_of_birth);

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

        if (!empty($request->password)) {
            $save->password = Hash::make($request->password);
        }
        $save->save();

        return redirect('admin/profile')->with('success', "Profile Successfully Updated.");
    }
}

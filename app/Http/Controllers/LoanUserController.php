<?php

namespace App\Http\Controllers;

use App\Models\LoanUserModel;
use Illuminate\Http\Request;

class LoanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['getRecord'] = LoanUserModel::getAllRecord();
        return view('admin.loan_user.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
        return view('admin.loan_user.create');
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $save = request()->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'email' => 'required|unique:loan_user',
            'surname' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'bvn_id' => 'required',
            'tax_id' => 'required'
        ]);
        $save = new LoanUserModel;
        $save->first_name = trim($request->first_name);
        $save->middle_name = trim($request->middle_name);
        $save->surname = trim($request->surname);
        $save->address = trim($request->address);
        $save->contact = trim($request->contact);
        $save->email = trim($request->email);
        $save->bvn_id = trim($request->bvn_id);
        $save->tax_id = trim($request->tax_id);
        $save->save();

        return redirect('admin/loan_user/list')->with('success', "Loan User Successfully Created.");
    }

    /**
     * Remove specified resource from storage.
     */

    public function destroy($id)
    {
        $recordDelete = LoanUserModel::getSingle($id);
        $recordDelete->delete();

        return redirect()->back()->with('success', "Record successfully deleted.");
    }

    public function staff_loan_user(Request $request)
    {
        return view('admin.admin_staff.staff_loan_user');
    }
}

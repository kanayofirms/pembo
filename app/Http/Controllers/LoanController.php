<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanModel;
use App\Models\LoanTypesModel;
use App\Models\LoanPlanModel;
use App\Models\LoanUserModel;
use App\Models\User;



class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.loan.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
        $data['getStaff'] = User::where('is_role', '=', '0')->where('is_delete', '=', '0')->get();
        $data['getLoanUser'] = LoanUserModel::get();
        $data['getLoanTypes'] = LoanTypesModel::get();
        $data['getLoanPlan'] = LoanPlanModel::get();
        return view('admin.loan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // dd($request->all());
        $save = new LoanModel;
        $save->user_id = trim($request->user_id);
        $save->staff_id = trim($request->staff_id);
        $save->loan_types_id = trim($request->loan_types_id);
        $save->loan_plan_id = trim($request->loan_plan_id);
        $save->loan_amount = trim($request->loan_amount);
        $save->purpose = trim($request->purpose);

        $save->save();
        return redirect('admin/loan/list')->with('success', "New Loan Application successfully created.");
    }
}

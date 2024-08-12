<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanPlanModel;

class LoanPlanController extends Controller
{
    public function index()
    {
        $data['getRecord'] = LoanPlanModel::getAllRecord();
        return view('admin.loan_plan.list', $data);
    }

    public function add()
    {
        return view('admin.loan_plan.add');
    }

    public function store(Request $request)
    {
        $save = new LoanPlanModel;
        $save->months = trim($request->months);
        $save->interest_percent = trim($request->interest_percent);
        $save->penalty_rate = trim($request->penalty_rate);
        $save->save();

        return redirect('admin/loan_plan/list')->with('success', "Loan Plan Successfully Added.");
    }

    public function edit($id, Request $request)
    {
        $data['getRecord'] = LoanPlanModel::getSingle($id);
        return view('admin.loan_plan.edit', $data);
    }

    public function update($id, Request $request)
    {
        $save = LoanPlanModel::getSingle($id);
        $save->months = trim($request->months);
        $save->interest_percent = trim($request->interest_percent);
        $save->penalty_rate = trim($request->penalty_rate);
        $save->save();

        return redirect('admin/loan_plan/list')->with('success', "Loan Plan Successfully Updated.");
    }

}

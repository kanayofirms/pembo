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
}

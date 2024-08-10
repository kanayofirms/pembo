<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanTypesModel;

class LoanTypesController extends Controller
{
    public function index()
    {
        return view('admin.loan_types.list');
    }

    public function add()
    {
        return view('admin.loan_types.add');
    }

    public function store(Request $request)
    {
        $save = request()->validate([
            'type_name' => 'required'
        ]);
        $save = new LoanTypesModel;
        $save->type_name = trim($request->type_name);
        $save->description = trim($request->description);
        $save->save();

        return redirect('admin/loan_types/list')->with('success', "Loan Types Successfully Created.");
    }
}

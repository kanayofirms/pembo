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
}

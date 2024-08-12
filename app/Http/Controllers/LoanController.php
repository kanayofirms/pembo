<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanModel;

class LoanController extends Controller
{
    public function index()
    {
        return view('admin.loan.list');
    }
}

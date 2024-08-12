<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.loan_user.index');
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create(Request $request)
    {
        return view('admin.loan_user.create');
    }
}

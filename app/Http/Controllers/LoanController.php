<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanModel;

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
        return view('admin.loan.create');
    }
}

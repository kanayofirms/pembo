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
}

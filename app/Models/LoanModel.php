<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class LoanModel extends Model
{
    use HasFactory;

    protected $table = 'loan';

    static public function getAllRecord()
    {
        return self::get();
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }

    public function getUserName()
    {
        return $this->belongsTo(LoanUserModel::class, 'user_id');
    }

    public function getStaffName()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }

    public function getLoanType()
    {
        return $this->belongsTo(LoanTypesModel::class, 'loan_types_id');
    }

    public function getLoanPlan()
    {
        return $this->belongsTo(LoanPlanModel::class, 'loan_plan_id');
    }

    static public function getLoanStaff($staff_id)
    {

        return self::select('loan.*', 'users.name', 'users.last_name', 'users.surname', 'loan_types.type_name', 'loan_plan.months')
            ->join('users', 'users.id', '=', 'loan.user_id')
            ->join('loan_types', 'loan_types.id', '=', 'loan.loan_types_id')
            ->join('loan_plan', 'loan_plan.id', '=', 'loan.loan_plan_id')
            ->where('loan.staff_id', '=', $staff_id)
            ->orderByDesc('loan.id')
            ->get();

    }
}

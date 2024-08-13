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
}

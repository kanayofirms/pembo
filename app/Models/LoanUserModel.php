<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanUserModel extends Model
{
    use HasFactory;

    protected $table = 'loan_user';

    static public function getAllRecord()
    {
        return self::get();
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }
}
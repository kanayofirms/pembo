<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanTypesModel extends Model
{
    use HasFactory;

    protected $table = 'loan_types';

    static public function getAllRecord()
    {
        return self::get();
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }
}

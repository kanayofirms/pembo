<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

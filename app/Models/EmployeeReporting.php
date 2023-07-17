<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeReporting extends Model
{
    use HasFactory;

    protected $fillable = [
        'manager_id', 'employee_id', 'start_date', 'end_date',
    ];
}

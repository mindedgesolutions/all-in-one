<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_type_id',
        'first_name',
        'middle_name',
        'last_name',
        'address_line_1',
        'address_line_2',
        'dob',
        'dor',
        'salary',
    ];

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id', 'id');
    }
}

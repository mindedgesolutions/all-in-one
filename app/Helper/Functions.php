<?php

use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;

function employeeName($id)
{
  $exists = UserDetail::where('user_id', $id)->exists();

  if ($exists){
    $details = UserDetail::where('user_id', $id)->first();
    $firstName = $details->first_name . ' ';
    $middleName = $details->middle_name ? $details->middle_name . ' ' : '';
    $lastName = $details->last_name;
    $name = $firstName . $middleName . $lastName;
  }else{
    $name = "";
  }
  return $name;
}

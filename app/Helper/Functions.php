<?php

use App\Models\ClientContact;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;

function employeeName($id)
{
  $exists = UserDetail::where('user_id', $id)->exists();

  if ($exists) {
    $details = UserDetail::where('user_id', $id)->first();
    $firstName = $details->first_name . ' ';
    $middleName = $details->middle_name ? $details->middle_name . ' ' : '';
    $lastName = $details->last_name;
    $name = $firstName . $middleName . $lastName;
  } else {
    $name = "";
  }
  return $name;
}

function employeeAddress($id)
{
  $exists = UserDetail::where('user_id', $id)->exists();

  if ($exists) {
    $details = UserDetail::where('user_id', $id)->first();
    $addressLineOne = $details->address_line_1;
    $addressLineTwo = $details->address_line_2 ? ', ' . $details->address_line_2 : '';
    $address = $addressLineOne . $addressLineTwo;
  } else {
    $address = "";
  }
  return $address;
}

function clientContacts($id)
{
  $all = ClientContact::where('client_id', $id)->get();
  $contactsOne = '';
  $contactsTwo = '';
  foreach ($all as $key => $value) {
    if ($key == 0) {
      $contactsOne =
        '<div class="flex-fill">
          <div class="font-weight-medium"><i class="ti ti-user"></i> ' . $value->contact_person . '</div>
          <div class="text-muted"><i class="ti ti-mail"></i> <a href="#"
                  class="text-reset">' . $value->email . '</a></div>
        </div>';
    }else{
      $contactsTwo =
        '<div class="flex-fill">
          <div class="font-weight-medium"><i class="ti ti-user"></i> ' . $value->contact_person . '</div>
          <div class="text-muted"><i class="ti ti-mail"></i> <a href="#"
                  class="text-reset">' . $value->email . '</a></div>
        </div>';
    }
  }
  return array($contactsOne, $contactsTwo);
}

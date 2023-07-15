<?php

use Illuminate\Support\Facades\Auth;

function userDetails()
{
  $email = Auth::user()->email;
  dd($email);
  return $email;
}
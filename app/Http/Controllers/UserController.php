<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function logout(){

    Auth::logout();
    return view('index');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
      $usser = [];
      $usser['name'] = 'Mr';
      $usser['second_name'] = 'Evrey';
      return view('profile')->withUser($usser);
    }
}

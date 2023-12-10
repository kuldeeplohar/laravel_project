<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kuldeep extends Controller
{
 public function show(){

      return view('kl',[
        'user' => '111111'
      ]);
 }
}

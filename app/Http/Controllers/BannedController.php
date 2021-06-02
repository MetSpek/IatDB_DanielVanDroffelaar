<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannedController extends Controller
{
    public function show(){
        return view('banned');
    }
}

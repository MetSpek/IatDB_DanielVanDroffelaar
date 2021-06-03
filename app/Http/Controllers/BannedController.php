<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BannedController extends Controller
{
    public function show(){
        $user = Auth::user();
        return view('banned',[
            'user' => $user
        ]);
    }
}

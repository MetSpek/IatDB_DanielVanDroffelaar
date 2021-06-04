<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BannedController extends Controller
{
    //Laat de banned pagina zien als gebruiker is gebanned
    public function show(){
        $user = Auth::user();
        return view('banned',[
            'user' => $user
        ]);
    }
}

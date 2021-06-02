<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{
    public function show(){
        $user = Auth::user();
        return view('admin',[
            'user' => $user,
            'dier' => \App\Models\AnimalInfo::all()
        ]);
    }

    public function ban(Request $request){  
        $usernames = \App\Models\User::all();
        $userids = \App\Models\User::all('id');
        $persoon = $request->persoon;
        $toBeBanned = \App\Models\User::all()->where("name", $persoon)->first();
        if($toBeBanned != null){
            \App\Models\AnimalInfo::where("eigenaar", $toBeBanned->id)->delete();
            if(\App\Models\Reacties::first() != null){
                \App\Models\Reacties::first()->where("zoeker_naam", $username)->delete();
            }
            if($toBeBanned->banned == "BANNED"){
                return redirect('/error/3');
            } else {
                $toBeBanned->banned = "BANNED";
            }
            
            try{
                $toBeBanned->save();
                return redirect('/admin');
            }
            catch(Exception $e){
                return redirect('/admin');
            }
        } else {
            return redirect('/error/4');
        }
        
    }
    
}

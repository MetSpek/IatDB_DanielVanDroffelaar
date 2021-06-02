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
        $usernames = \App\Models\User::all('name');
        $persoon = $request;
        for($i = 0; $i < count($usernames); $i++){
            if($persoon->persoon == $usernames[$i]->name){
                $persoon = \App\Models\User::all()->where("name", $usernames[$i]->name)->first();
                $persoon->banned = "BANNED";
                try{
                    $persoon->save();
                    return redirect('/admin');
                }
                catch(Exception $e){
                    return redirect('/admin');
                }
            } 
        }
        
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class VerzoekController extends Controller
{
    public function weigerVerzoek($dier, $id){
        $weiger = \App\Models\Reacties::all()->where("dier_id", $dier)->delete();
        return redirect('/');
     }
 
     public function accepteerVerzoek($dier, $id, $user){
        \App\Models\AnimalInfo::where("number", $dier)->delete();
        \App\Models\Reacties::all()->where("dier_id", $dier)->delete();
        $url = "/review/{$user}";
 
        
        return redirect($url);
     }


     public function slaverzoekop(Request $request, \App\Models\Reacties $reactie, $id){
        $user = Auth::user();
        $reacties = \App\Models\Reacties::all()->where("dier_id", $id)->where("zoeker_id", $user->id);
        $eigenaar = \App\Models\AnimalInfo::all()->where("number", $id)->where("eigenaar", $user->id)->first();
           
        if($eigenaar == null){
            if(sizeof($reacties) > 0){
                return redirect('/error/1');
            } else {
                $reactie->dier_naam = $request->input('dier_naam');
                $reactie->dier_id = $request->input('dier_id');
                $reactie->eigenaar_id = $request->input('eigenaar_id');
                $reactie->zoeker_naam = $user->name;
                $reactie->zoeker_id = $user->id;

                try{
                    $reactie->save();
                    return redirect('/');
                }
                catch(Exception $e){
                    return redirect('/');
                }
            }
        } else {
            return redirect('/error/2');
        }
        
        

        
        

        

        

        
    }

    public function alGereageerd(){
        return view('algereageerd');
    }

    public function eigenaar(){
        return view('eigenaar');
    }
}

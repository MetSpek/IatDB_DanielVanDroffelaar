<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class VerzoekController extends Controller
{
    public function weigerVerzoek($id){
        \App\Models\Reacties::where("verzoek_id", $id)->delete();
        return redirect('/');
     }
 
     public function accepteerVerzoek($dier, $id, $user){
        \App\Models\Reacties::where("dier", $dier)->where("zoeker", $id)->delete();
        \App\Models\AnimalInfo::where("number", $dier)->delete();
        $url = "/review/{$user}";
 
        
        return redirect($url);
     }


     public function slaverzoekop(Request $request, \App\Models\Reacties $reactie, $id){
        $user = Auth::user();
        $reacties = \App\Models\Reacties::all()->where("dier", $id)->where("zoeker", $user->id);
        $eigenaar = \App\Models\AnimalInfo::all()->where("number", $id)->where("eigenaar", $user->id)->first();
           
        if($eigenaar == null){
            if(sizeof($reacties) > 0){
                return redirect('/error/1');
            } else {
                $reactie->dier_naam = $request->input('dier_naam');
                $reactie->dier = $request->input('dier');
                $reactie->eigenaar = $request->input('eigenaar');
                $reactie->zoeker_naam = $user->name;
                $reactie->zoeker = $user->id;

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
}

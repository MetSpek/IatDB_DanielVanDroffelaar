<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        $dieren = \App\Models\AnimalInfo::all()->where("eigenaar", $user->id);
        $mensen = \App\Models\Reacties::all()->where("eigenaar_id", $user->id);
    
       
        return view('index',[
            'user' => $user,
            'dier' => $dieren,
            'verzoek' => $mensen
        ]);
    }

    public function profiel($id){
        $user = Auth::user();

        return view('profiel',[
            'user' => $user,
            'persoon' => \App\Models\User::find($id),
            'review' => \App\Models\Review::all()->where("reviewed", $id),
            'image' => \App\Models\Images::all()->where("user_id", $id)
        ]);
    }

    public function dierenlijst(){
        $user = Auth::user();
        return view('dierenlijst',[
            'user' => $user, 
            'dieren' => \App\Models\AnimalInfo::all()
        ]);
    }

    public function maakdier(){
        $user = Auth::user();
        return view('createdier',[
            'user' => $user,
            'soort' => \App\Models\Soorten::all()
        ]);
    }

    public function showdier($number){
        $user = Auth::user();
        $dieren = \App\Models\AnimalInfo::all()->where("number", $number)->first();
        $reacties = \App\Models\Reacties::all();

        

        return view('dier',[
            'dier' => $dieren,
            'user' => $user,
            'reacties' => $reacties
        ]);
    }

    public function review($id){
        return view('review',[
            'user' => \App\Models\User::find($id)
        ]);
    }
    

    public function store(Request $request, \App\Models\AnimalInfo $info){
        $user = Auth::user();
        $info->eigenaar = $user->id;
        $info->name = $request->input('name');
        $info->soort = $request->input('soort');
        $info->start = $request->input('start');
        $info->end = $request->input('end');
        $info->costs = $request->input('costs');
        $info->plaats = $request->input('place');
        $info->from = $request->input('from');
        $info->to = $request->input('to');
        $info->comment = $request->input('comment');

       try{
           $info->save();
           return redirect('/');
       }
       catch(Exception $e){
           return redirect('/');
       }
    }

    public function slaverzoekop(Request $request, \App\Models\Reacties $reactie){
        $user = Auth::user();
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

    public function slareviewop(Request $request, \App\Models\Review $review){
        $user = Auth::user();
        $review->reviewer = $user->name;
        $review->reviewed = $request->input('reviewed');
        $review->score = $request->input('score');
        $review->comment = $request->input('comment');

       try{
           $review->save();
           return redirect('/');
       }
       catch(Exception $e){
           return redirect('/');
       }
    }

    public function weigerVerzoek($dier, $id){
       \App\Models\Reacties::where("verzoek_id", $id)->delete();
       return redirect('/');
    }

    public function accepteerVerzoek($dier, $id, $user){
        \App\Models\Reacties::where("verzoek_id", $id)->delete();
        \App\Models\Reacties::where("dier_id", $dier)->delete();

        $url = "/review/{$user}";

        return redirect($url);
    }

    public function verwijderDier($id){
        \App\Models\AnimalInfo::where("number", $id)->delete();
        \App\Models\Reacties::where("dier_id", $id)->delete();
        return redirect('/');
     }

}

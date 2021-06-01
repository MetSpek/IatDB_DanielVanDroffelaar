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
            'user' => \App\Models\User::find($id)
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
            'user' => $user
        ]);
    }

    public function showdier($number){
        $user = Auth::user();
        return view('dier',[
            'dier' => \App\Models\AnimalInfo::find($number),
            'user' => $user
        ]);
    }

    

    public function store(Request $request, \App\Models\AnimalInfo $info){
        $user = Auth::user();
        $info->eigenaar = $user->id;
        $info->name = $request->input('name');
        $info->kind = $request->input('kind');
        $info->start = $request->input('start');
        $info->end = $request->input('end');
        $info->costs = $request->input('costs');
        $info->from = $request->input('from');
        $info->to = $request->input('to');

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

}

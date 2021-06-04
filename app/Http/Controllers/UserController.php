<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class UserController extends Controller
{
    //Laat de index/home pagina zien
    public function index(){
        $user = Auth::user();
        $dieren = \App\Models\AnimalInfo::all()->where("eigenaar", $user->id);
        $mensen = \App\Models\Reacties::all()->where("eigenaar", $user->id);
        $verzoeken = \App\Models\Reacties::all()->where("zoeker", $user->id);
        return view('index',[
            'user' => $user,
            'dier' => $dieren,
            'verzoek' => $mensen,
            'oppassen' => $verzoeken

        ]);
    }

    //Laat de profiel pagina zien
    public function profiel($id){
        $user = Auth::user();

        return view('profiel',[
            'user' => $user,
            'persoon' => \App\Models\User::find($id),
            'review' => \App\Models\Review::all()->where("reviewed", $id),
            'image' => \App\Models\Images::all()->where("user", $id)
        ]);
    }
   
    //Laat de review invoer pagina zien
    public function review($id){
        return view('review',[
            'user' => \App\Models\User::find($id)
        ]);
    }

    public function error($id){
        $user = Auth::user();
        return view('error',[
            'error' => \App\Models\Error::all()->where("id", $id)->first(),
            'user' => $user
        ]);
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

    

    
}

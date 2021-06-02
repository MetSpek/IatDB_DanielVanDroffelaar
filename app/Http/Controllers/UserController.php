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
        $verzoeken = \App\Models\Reacties::all()->where("zoeker_id", $user->id);
       
        
        return view('index',[
            'user' => $user,
            'dier' => $dieren,
            'verzoek' => $mensen,
            'oppassen' => $verzoeken
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
   

    public function review($id){
        return view('review',[
            'user' => \App\Models\User::find($id)
        ]);
    }

    public function error($id){
        return view('error',[
            'error' => \App\Models\Error::all()->where("id", $id)->first()
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

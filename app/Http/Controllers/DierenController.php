<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DierenController extends Controller
{
    //Laat de dierenlijst zien
    public function dierenlijst(){
        $user = Auth::user();
        return view('dierenlijst',[
            'user' => $user, 
            'dier' => \App\Models\AnimalInfo::all()
        ]);
    }

    //Laat de pagina waar je oppas aanvraag kan maken zien
    public function maakdier(){
        $user = Auth::user();
        return view('createdier',[
            'user' => $user,
            'soort' => \App\Models\Soorten::all()
        ]);
    }

    //Laat de detailpagina zien van het dier
    public function showdier($number){
        $user = Auth::user();
        $dieren = \App\Models\AnimalInfo::all()->where("number", $number)->first();
        $reacties = \App\Models\Reacties::all();
        $eigenaar = \App\Models\User::all()->where("id", $dieren->eigenaar)->first();    

        return view('dier',[
            'dier' => $dieren,
            'user' => $user,
            'reacties' => $reacties,
            'eigenaar' => $eigenaar
        ]);
    }

    //Slaat het gemaakte dier op
    public function store(Request $request, \App\Models\AnimalInfo $info){
        $user = Auth::user();
        $image = $request->image;
        $filesize = filesize($image);
        if($filesize > 0){
            $image->storeAs('images', $request->image->getClientOriginalName());
            $afbeelding = $request->image->getClientOriginalName();
            $info->image = $afbeelding;
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
        }   else {
            return redirect('/error/6');
        }
    }

    //verwijdert het dier
    public function verwijderDier($id){
        \App\Models\AnimalInfo::where("number", $id)->delete();
        \App\Models\Reacties::where("dier", $id)->delete();
        return back();
     }

}

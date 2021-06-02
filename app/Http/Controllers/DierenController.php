<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class DierenController extends Controller
{
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
        $eigenaar = \App\Models\User::all()->where("id", $dieren->eigenaar)->first();    

        return view('dier',[
            'dier' => $dieren,
            'user' => $user,
            'reacties' => $reacties,
            'eigenaar' => $eigenaar
        ]);
    }

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

    public function verwijderDier($id){
        \App\Models\AnimalInfo::where("number", $id)->delete();
        \App\Models\Reacties::where("dier_id", $id)->delete();
        return redirect('/');
     }

}

<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Auth;
use DB;
  
class ImageUploadController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUpload(){
        $user = Auth::user();

        return view('imageUpload', [
            'user' => $user
        ]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request, \App\Models\Images $images)
    {
        $user = Auth::user();
        $request->image->storeAs('images', $request->image->getClientOriginalName());
        $afbeelding = $request->image->getClientOriginalName();

        $images->fileName = $afbeelding;
        $images->user_id =  $user->id;
        
        try{
            $images->save();
            return redirect('/');
        }
        catch(Exception $e){
            return redirect('/');
        }
    }
}
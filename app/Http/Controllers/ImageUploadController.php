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

    //Laat de image pagina zien
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

    //Slaat de gestuurde bestand op in de public/storage/imgages en schrijft imagenaam naar tabel
    public function imageUploadPost(Request $request, \App\Models\Images $images)
    {
        $user = Auth::user();
        $image = $request->image;
        $filesize = filesize($image);
        if($filesize > 0){
            $image->storeAs('images', $request->image->getClientOriginalName());
            $afbeelding = $request->image->getClientOriginalName();
            $images->fileName = $afbeelding;
            $images->user =  $user->id;
            $url = "/profiel/$user->id";

            try{
                $images->save();
                return redirect($url);
            }
            catch(Exception $e){
                return redirect($url);
            }
        } else {
            return redirect('/error/5');
        }
        
    }

    public function teGroot(){
        return view('tegroot');
    }
}
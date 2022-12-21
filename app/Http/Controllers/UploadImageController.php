<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Image;

class UploadImageController extends Controller
{
   
   /*  public function upload(Request $request){
        
        $image = $request->profile;
        $name = $image->getClientOriginalName();
        $image -> storeAs('public/images', $name);
        $image_save = new Image;
        $image_save->name=$name;
        $image_save->save();

        return back();
    } */

    public function create(){
        return view('upload');
    }

    public function store(Request $request){
        dd($request);
    }
}

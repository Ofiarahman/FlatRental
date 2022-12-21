<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewHomeController extends Controller
{
    function HomeIndex(){
        return view('Review');
    }

    function DataInsert(Request $request){
        $name = $request->input('name');
        $address = $request->input('address');
        $rname = $request->input('rname');
        $raddress = $request->input('raddress');
        $status = $request->input('status');
        $comment = $request->input('comment');

        $isInsertSuccess = Review::insert(['name'=>$name,'address'=>$address,'rname'=>$rname,'raddress'=>$raddress,'status'=>$status,'comment'=>$comment]);
        
        if($isInsertSuccess) echo '<h1>Insert Successfully</h1>';
        else echo '<h1>Insert Not Successful</h1>';
    }

    
}

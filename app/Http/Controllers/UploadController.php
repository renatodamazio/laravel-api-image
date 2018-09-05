<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UploadController extends Controller
{
     public function upload(Request $request) {

    	$photoName = time().'.'.$request->upload->getClientOriginalExtension();
    	$request->upload->move(public_path('avatars'), $photoName);

    	// return $photoName;
    	return response()->json([
		    'image' => '/avatars/'.$photoName
		]);

    }
    
     public function index(Request $request) {
     	return view('index');
    }


}

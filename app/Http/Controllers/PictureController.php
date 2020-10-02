<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Picture;

class PictureController extends Controller
{
    //
	
	public function index() {
				
		
		return view('picture/dashboard');
	}
	
	public function view($id) {
		
		$picture = Picture::find($id);
		
		return view('view.dashboard')->with('picture', $picture);
	}
}

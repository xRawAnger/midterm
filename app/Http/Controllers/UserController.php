<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$movies=Movies::get();
    	return view("user.indexUser",["movies"=>$movies]);
    }

        public function show($id)
    {
    	$movie=Movies::where("id",$id)->firstOrFail();
    	return view("user.show",["movie"=>$movie]);
    }
}

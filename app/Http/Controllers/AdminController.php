<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index()
    {
    	$movies=Movies::get();
    	return view("movies.index",["movies"=>$movies]);
    }
        public function create()
    {
    	return view("movies.create");
    }

    public function store(Request $request)
    {
    	Movies::create([
    		"title"=>$request->input("title"),
    		"IMDB"=>$request->input("IMDB"),
    		"genre_id"=>$request->input("genre_id"),
    		"pic_link"=>$request->input("pic_link"),
    		"description"=>$request->input("description"),

    	]);
    	return redirect()->route("adminindex");
    }
    public function delete(Request $request)
    {
    	Movies::where("id",$request->input("id"))->delete();
    	return redirect()->back();
    }
    public function update(Request $request)
    {
    	Movies::where("id",$request->input("id"))->update([
    		"title"=>$request->input("title"),
    		"IMDB"=>$request->input("IMDB"),
    		"genre_id"=>$request->input("genre_id"),
    		"pic_link"=>$request->input("pic_link"),
    		"description"=>$request->input("description"),
    	]);
    }
    public function edit($id)
    {
    	$movies=Movies::where("id",$id)->firstOrFail();
    	return view("movies.edit",["movies"=>$movies]);
    }
    public function show($id)
    {
    	$movies=Movies::where("id",$id)->firstOrFail();
    	return view("movies.show",["movies"=>$movies);
    }
}

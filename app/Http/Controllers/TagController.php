<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('index', ['tags' => $tags]);
    }
    public function addtage(Request $request){
        $tags = new tag;
        $tags->name = $request->name;
        $tags->save();
    }
}

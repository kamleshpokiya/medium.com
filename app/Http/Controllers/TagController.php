<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
        $tages = Tag::all();
        return view('index', ['tages' => $tages]);
    }
    public function addtage(){

    }
    public function edittage(){

    }
}

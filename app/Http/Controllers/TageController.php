<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tage;

class TageController extends Controller
{
    public function index(){
        $tages = Tage::all();
        return view('index', ['tages' => $tages]);
    }
    public function addtage(){

    }
    public function edittage(){

    }
}

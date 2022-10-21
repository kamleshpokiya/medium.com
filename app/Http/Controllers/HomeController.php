<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Article_images;

class HomeController extends Controller
{
    public function index()
    {

        // $data['articles'] = Article::where('is_delete', '0')->orderBy('id', 'desc');
        $data['articles'] =  DB::table('articles')->where('is_delete', '=', '0')->get();
        $data['articles_images'] = DB::table('article_images')->where('is_delete', '=', '0')->get();
        $data['tags'] = Tag::all();

        return view('home', $data);
    }
}

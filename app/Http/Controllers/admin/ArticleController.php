<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Article_images;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['articles'] = Article::where('is_delete', 0)->orderBy('id', 'desc')->paginate(10);
        return view('admin/articles/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $articles = Tag::all();
        return view('admin/articles/create', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'article_name' => 'required',
            'description' => 'required',
            'tag_id' => 'required',
            // 'image' => 'mimes:jpeg,jpg,png,gif|required|max:2000',
            'image' => 'required',
        ]);

        $files = [];
        $uploadStatus = [];
        $article = new Article;
        $article->name = $request->article_name;
        $article->description = $request->description;
        $article->tag_id  = implode(',', $request->tag_id);
        $article->save();
        $article_id = $article->id;
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                if ($file->move(public_path('uploads'), $name)) {
                    $files[] = $name;
                    $article_images = new Article_images();
                    $article_images->article_id = $article_id;
                    $article_images->name = $name;
                    $uploadStatus = $article_images->save();
                }
            }
        }

        if ($uploadStatus) {
            return redirect()->route('articles.index')
                ->with('success', 'Article has been created successfully.');
        } else {
            return back()->with('failed', 'Alert! file not uploaded');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recode = Article::find($id);
        return view('admin/articles/view', compact('article', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $tags = Tag::all();
        return view('admin/articles/edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'article_name' => 'required',
            'description' => 'required',
            'tag_id' => 'required',
            'image' => 'required',
        ]);
        $article = Article::find($id);
        $files = [];
        $uploadStatus = [];
        $article->name = $request->article_name;
        $article->description = $request->description;
        $article->tag_id  = implode(',', $request->tag_id);
        $article->save();
        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                if ($file->move(public_path('uploads'), $name)) {
                    $files[] = $name;
                    $article_images = new Article_images();
                    $article_images->article_id = $id;
                    $article_images->name = $name;
                    $uploadStatus = $article_images->save();
                }
            }
        }

        if ($uploadStatus) {
            return redirect()->route('articles.index')
                ->with('success', 'Article has been created successfully.');
        } else {
            return back()->with('failed', 'Alert! file not uploaded');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id != null) {
            $article = Article::findOrFail($id);
            $article->is_delete = 1;
            $article->save();
            return redirect()->route('articles.index')
                ->with('success', 'Article has been deleted successfully');
        }

        return redirect()->route('articles.index')->with(['error' => 'Wrong ID!!']);
    }
}

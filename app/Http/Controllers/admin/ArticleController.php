<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\admin;
// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tages = Tag::all();
       
        return view('articles/index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $articals = Article::all();
       

        return view('articles/create',compact('articals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'description' => 'required',
                'tag_id' => 'required',
                'cpassword' => 'required',
                'phonenumber' => 'required',
                'dob' => 'required',
                'city' => 'required|not_in:0',
                'gender' => 'required',
                'vehchles' => 'required|array|min:1',
                'image' => 'mimes:jpeg,jpg,png,gif|required|max:2000',
                'address' => 'required',
            ],
            [
                'name.required' => 'plase enter your name',
                'email.required' => 'plase enter your gmail',
                'vehchles.min' => 'plase chake atlast one',
                'city.not_in' => 'plase select your city',
                'image.max' => 'The image must not be greater than 2MB.',
            ]
        );

        if ($validated->fails()) {
            return response()->json(['errors' => $validated->getMessageBag()->toArray()]);
        }

        //save data using modale
        //profile image
        $file = $request->file('image');
        $file->move(public_path('\profile_pic'), $file->getClientOriginalName());
        $obj_modal = new Article;
        $obj_modal->name = $request->name;

       
        $obj_modal->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articalid = $id;
        $recode = Article::find($id);
        return view('/editarticle', ['article' => $recode]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articalid = $id;
        $recode = Article::find($id);
        return view('/editarticle', ['article' => $recode]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articalid = $id;
        $selected_emp = Article::find($articalid);
        $selected_emp->delete();
        return redirect('/article');
    }
}

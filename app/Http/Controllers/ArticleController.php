<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function article(Request $request)
    {
        $articals = Article::all();
        return view('index', ['article' => $articals]);
    }
    public function addarticle(Request $request)
    {
        $validated = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
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
        $obj_modal->email = $request->email;

        $obj_modal->password = $request->password;
        $obj_modal->phone_no = $request->phonenumber;
        $obj_modal->dob = $request->dob;
        $obj_modal->city = $request->city;
        $obj_modal->vehicle = implode(',', $request->vehchles);
        $obj_modal->gender = $request->gender;
        $obj_modal->profile_pic = $file->getClientOriginalName();
        $obj_modal->address = $request->address;
        $obj_modal->save();

        return view('/index');
    }
    public function editarticle(Request $id)
    {
        $articalid = $id;
        $recode = Article::find($id);
        return view('/editarticle', ['article' => $recode]);
    }
    public function delatearticle($id)
    {
        $articalid = $id;
        $selected_emp = Article::find($articalid);
        $selected_emp->delete();
        return redirect('/article');
    }
}

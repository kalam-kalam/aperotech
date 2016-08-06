<?php

namespace App\Http\Controllers;

use App\Apero;
use App\Category;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AperoFrontController extends Controller
{

    public function index()
    {}


    public function create()
    {
        $categories = Category::lists('name', 'id');
        $tags = Tag::lists('name', 'id');

        return view('front.offer', compact('categories', 'tags'));
    }

    public function store(Requests\FormRequest $request)
    {
        $email = $request->email;
        $user = DB::table('users')->where('email', $email);

        if (!null($user)) {

            $apero = Apero::create($request->all());


            if (!empty($request->input('tags'))) {
                $apero->tags()->attach($request->input('tags'));
            }
            $apero->tags()->attach($request->input('tags'));

            return redirect('/');
        }


    }


    public function show($id)
    {}
    public function edit($id)
    {}

    public function update(Request $request, $id)
    {}

    public function destroy($id)
    {}
}

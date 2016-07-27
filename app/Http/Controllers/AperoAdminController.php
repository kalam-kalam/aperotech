<?php

namespace App\Http\Controllers;

use App\Apero;
use App\Category;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AperoAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aperos = Apero::paginate(5);
        $users = User::all();

        return view('admin.index', compact('aperos', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::lists('name','id');
        $tags = Tag::lists('name','id');
        return view('admin.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $apero= Apero::create($request->all());

        if (!empty($request->input('tags')))
        {
            $apero->tags()->attach($request->input('tags'));
        }
        $apero->tags()->attach($request-> input('tags'));
        

        return back()->with(['message'=>'votre post a bien été ajouté']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $published=' ';
        $unpublished=' ';

        $apero = Apero::find($id);

        ($apero->status == 'published')? $published ='checked': $unpublished ='checked';

        $categories = Category::lists('name', 'id');
        $tags = Tag::lists('name', 'id');

        return view ('admin.edit', compact('apero', 'published', 'unpublished','categories', 'tags'));
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
        $apero = Apero::find($id);

        $apero->update($request->all());

        if(!empty($request->tags))
        {
            $apero->tags()->detach();
            $apero->tags()->attach($request->tags);
        }
        else
        {
            $apero->tags()->detach();
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
        Apero::find($id);

        Apero::destroy($id);

        return back()->with(['message'=>'apero supprimé']);
    }


}

<?php

namespace App\Http\Controllers;

use App\Apero;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function index(Request $request)
    {

            $query = $request->input('the_search', '');

            $aperos = Apero::where('title', 'LIKE', '%' . $query . '%')->paginate(5);

            $tags = Tag::where('name','LIKE', '%'.$query . '%')->get();

            return view('front.search', compact('aperos', 'query', 'tags'));


    }

    public function create()
    {}
    public function store(Request $request)
    {}

    public function show($id)
    {}

    public function edit($id)
    {}

    public function update(Request $request, $id)
    {}

    public function destroy($id)
    {}
}

<?php

namespace App\Http\Controllers;

use App\Apero;
use Illuminate\Http\Request;
use App\Http\Requests;

class PublishController extends Controller
{

    public function index()
    {

    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

        $apero = Apero::find($id);

        if ($apero->status == 'published') {
            $apero->update(['status' => 'unpublished']);
        } else {
            $apero->update(['status' => 'published']);
        }

        return back();


    }


    public function destroy($id)
    {

    }
}

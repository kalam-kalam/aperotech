<?php

namespace App\Http\Controllers;

use App\Apero;
use Illuminate\Http\Request;



class FrontController extends Controller
{
    public function index()
    {
        // seulement les 3 prochains aperos

        //$aperos = Apero::whereDate('created_at', '>=',date('Y-m-d'));

        $aperos = Apero::all();

        return view('front.index', compact('aperos'));
    }

    public function showApero($id)
    {
        $apero = Apero::find($id);

        return view ('front.show', compact('apero'));
    }




}

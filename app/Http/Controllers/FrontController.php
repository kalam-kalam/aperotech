<?php

namespace App\Http\Controllers;

use App\Apero;
use App\Category;
use App\Tag;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrontController extends Controller
{
    public function index()
    {
        $today = Carbon::now()->toDateString();

        $aperos = Apero::where('date', '>=', $today)
            ->orderBy('date')
            ->paginate(3);

        $categories = Category::all();

        return view('front.index', compact('aperos', 'today', 'categories'));
    }
    

    public function showApero($id)
    {
        $apero = Apero::find($id);

        return view ('front.show', compact('apero'));
    }



    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function show($id)
    {

        $comics_array = config('comics');
        $comics = $comics_array[$id];

        return view('comic', compact('comics')); //? oppure ['comics' => $comics]
    }
}

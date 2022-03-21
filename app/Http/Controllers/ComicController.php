<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function show($id)
    {

        $comics = config('comics');
        $dummy_comic = $comics[$id];

        return view('comic', ['comics' => $dummy_comic]); //? oppure ['comics' => $comics]
    }
}

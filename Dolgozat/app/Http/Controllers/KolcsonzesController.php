<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mufaj;
use App\Models\Film;

class KolcsonzesController extends Controller
{
    public function createharom() {
        $mufajok = Mufaj::all();
        $filmek = Film::all();
        return view('kolcsonzes', compact('filmek'), compact('mufajok'));
    }
}

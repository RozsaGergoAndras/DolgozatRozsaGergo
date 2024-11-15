<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KolcsonzesController extends Controller
{
    public function createharom() {
        return view('kolcsonzes');
    }
}

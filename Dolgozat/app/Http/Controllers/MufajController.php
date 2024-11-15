<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MufajController extends Controller
{
    public function create() {
        return view('input_mufaj');
    }
}

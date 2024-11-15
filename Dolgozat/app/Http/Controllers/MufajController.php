<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Mufaj;
use Illuminate\Http\Request;

class MufajController extends Controller
{
    public function create() {
        return view('input_mufaj');
    }

    public function createketto() {
        $mufajok = Mufaj::all();
        return view('input_film', compact("mufajok"));
    }

    public function store(Request $request){
        Mufaj::create([
            'mufaj' => $request->input('mufaj'),
            
        ]);
        return redirect()->back()->with('success', 'Sikeres feltöltés');
    }

    public function storeketto(Request $request){
        Film::create([
            'cim' => $request->input('cim'),
            'rendezo' => $request->input('rendezo'),
            'megjelenes' => $request->input('megjelenes'),
            'mufaj_id' => $request->input('mufaj_id'),
            
        ]);
        return redirect()->back()->with('success', 'Sikeres feltöltés');
    }
}

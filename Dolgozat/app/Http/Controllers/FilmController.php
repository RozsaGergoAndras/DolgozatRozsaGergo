<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use Illuminate\Http\Request;


class FilmController extends Controller
{
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    protected $fillable = ['cim', "rendezo", "megjelenes" , "mufaj_id"];
    use SoftDeletes;
    /** @use HasFactory<\Database\Factories\FilmFactory> */
    use HasFactory;
    public function mufaj() { return $this->belongsTo(Mufaj::class, 'mufaj_id'); }
}

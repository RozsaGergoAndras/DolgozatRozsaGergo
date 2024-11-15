<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mufaj extends Model
{
    protected $table = 'mufajok';
    protected $fillable = ['mufaj'];
    use SoftDeletes;
    public function films() { return $this->hasMany(Film::class, 'mufaj_id');}
}

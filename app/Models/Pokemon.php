<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nombre', 'tipo1', 'tipo2', 'grupo_huevo', 'numero', 'img'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
    use HasFactory;
    protected $table= 'jugadores';
    public $timestamps =false;
     public $fillable = ['nom','ape', 'CI','camiseta','posicion','id_equipo'];
}

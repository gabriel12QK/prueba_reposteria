<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    use HasFactory;
    protected $table= 'equipos';
    public $timestamps =false;
     public $fillable = ['nom','ciudad', 'foto','id_presidente'];
}

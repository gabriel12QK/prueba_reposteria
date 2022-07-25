<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presidente extends Model
{
    use HasFactory;
    protected $table= 'equipos';
    public $timestamps =false;
     public $fillable = ['nom','ape', 'CI','fech_posecion'];
}

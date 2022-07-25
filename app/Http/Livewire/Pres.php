<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\jugadores;
use PDF;
//query builder
use Illuminate\Support\Facades\DB;
class Pres extends Component
{
    public function render()
    {
        // $j=DB::table('jugadores')
        // ->join('equipos','jugadores.id_equipo','=','equipos.id')
        // ->select('jugadores.*','equipos.nom as nomp')
        // -> where( 'equipos.nom', 'like', '%'.$this->buscar.'%' )->get();
        // return view('livewire.pres', compact('j'));
    }
}

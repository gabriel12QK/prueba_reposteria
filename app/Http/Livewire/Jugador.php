<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\jugadores;
use PDF;
//query builder
use Illuminate\Support\Facades\DB;
class Jugador extends Component
{
    // protected $queryString = ['buscar'];
    // public $buscar;
    // public function render()
    // {
    //     $j=DB::table('jugadores')
    //     ->join('equipos','jugadores.id_equipo','=','equipos.id')
    //     ->select('jugadores.*','equipos.nom as nomp')
    //     -> where( 'jugador.CI', 'like', '%'.$this->buscar.'%' )->get();
    //     return view('livewire.jugador', compact('j'));
    // }

}

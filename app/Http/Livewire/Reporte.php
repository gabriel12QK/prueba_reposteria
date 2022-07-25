<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\equipo;
use App\Models\jugadores;
use App\Models\presidente;
use PDF;

//query builder
use Illuminate\Support\Facades\DB;

class Reporte extends Component
{
    
    protected $queryString = ['buscar'];
    public $buscar, $nomequipo;
    
    public function equipo()
    {
       
        $e=DB::table('equipos')
        ->join('presidentes','equipos.id_presidente','=','presidentes.id')
        ->select('equipos.*','presidentes.nom as nomp','presidentes.ape as apep')
        ->get();
        
         return PDF::loadView('livewire.equip', compact('e'))
        ->stream('archivo.pdf');
    } 

    public function render()
    {

        return view('livewire.reporte');
    }


    public function jugador($buscar)
    {
        $j=DB::table('jugadores')
        ->join('equipos','jugadores.id_equipo','=','equipos.id')
        ->select('jugadores.*','equipos.nom as nomp')
        -> where( 'jugadores.CI',$buscar )->get();
        return PDF::loadView('livewire.jugador', compact('j'))
        ->stream('archivo.pdf');
    }

    public function JUGADORE($nomequipo)
    {
        $je=DB::table('jugadores')
        ->join('equipos','jugadores.id_equipo','=','equipos.id')
        ->select('jugadores.*','equipos.nom as nomp')
        -> where( 'equipos.nom', $nomequipo )->get();
        return PDF::loadView('livewire.pres', compact('je'))
        ->stream('archivo.pdf');
    }

}

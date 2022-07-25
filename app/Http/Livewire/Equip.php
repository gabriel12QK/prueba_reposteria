<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\equipo;
use PDF;
//query builder
use Illuminate\Support\Facades\DB;
class Equip extends Component
{
   
   public function render()
        {
            // $e=DB::table('equipos')
            // ->join('presidentes','equipos.id_presidente','=','presidentes.id')
            // ->select('equipos.*','presidentes.nom as nomp','presidentes.ape as apep')
            // ->get();
            
            // return view('livewire.equip', compact('e'));
        } 
}     

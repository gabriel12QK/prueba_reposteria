<div>
    <div>
        <a href="{{url('equipos-pdf')}}">reporte de jugador</a>
     </div>
<br>
<br>
     <div>
         <form action="">
            <input type="text" wire:model="buscar">
            <a href="{{url('jugador-pdf'.$buscar)}}">reporte de jugador</a>
      </div>
       <br>
       <br>
      <div>
        <form action="">
           <input type="text" wire:model="nomequipo">
           <a href="{{url('jugadorE-pdf'.$nomequipo)}}">reporte de jugador por equipo</a>
     </div>
         
</div>


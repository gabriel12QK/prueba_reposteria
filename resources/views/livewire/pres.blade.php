<div>
    <table>
        <thead>
            <tr>
                <td>
                   nombre 
                </td>
                <td>
                    apellido
                 </td>
                 <td>
                    cedula
                 </td>
                 <td>
                    camiseta
                 </td>
                 <td>
                    posicion
                 </td>
                 <td>
                    equipo
                 </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($je as $item)
                <tr>
                    <td>
                        {{$item->nom}}
                    </td>
                    <td>
                        {{$item->ape}}
                    </td>
                    <td>
                        {{$item->CI}}
                    </td>
                    <td>
                        {{$item->camiseta}}
                    </td>
                    <td>
                        {{$item->posicion}}
                    </td>
                    <td>
                        {{$item->nomp}} 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



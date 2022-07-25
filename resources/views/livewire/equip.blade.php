 <div>
    <table>
        <thead >
            <tr >
                <td >
                   nombre 
                </td>
                <td>
                    ciudad
                 </td>
                 <td>
                    foto 
                 </td>
                 <td>
                    presidente
                 </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($e as $item)
                <tr>
                    <td>
                        {{$item->nom}}
                    </td>
                    <td>
                        {{$item->ciudad}}
                    </td>
                    <td>
                        {{$item->foto}}
                    </td>
                    <td>
                        {{$item->nomp}}  {{$item->apep}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 

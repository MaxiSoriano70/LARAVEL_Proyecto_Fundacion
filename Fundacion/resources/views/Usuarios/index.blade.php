@foreach ($arrayUser as $item)
@if ($item->idTipo==1)
    <h1>Soy un adm1</h1>
    <h1>{{$item->Clave}}</h1>
    <h1>{{$item->Email}}</h1>
@elseif($item->idTipo==2)
    <h1>Soy un teacher</h1>
    <h1>{{$item->Clave}}</h1>
    <h1>{{$item->Email}}</h1>
@elseif($item->idTipo==3)
    <h1>Soy un alumno</h1>
    <h1>{{$item->Clave}}</h1>
    <h1>{{$item->Email}}</h1>
@endif
@endforeach
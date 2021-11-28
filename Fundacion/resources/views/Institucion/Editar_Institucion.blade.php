<title>Editar Institucion</title>
@foreach ($arrayInstitucion as $dato)
    <form method="POST" action="{{ route('Institucion.update',$dato->idInstitucion); }}">
        @csrf
        @method('PUT')
        <label for="">Nombre: </label><br>
            <input name="Nombre" type="text" value="{{$dato->Nombre}}"><br>
        <label for="">Direccion: </label><br>
            <input name="Direccion" type="text" value="{{$dato->Direccion}}"><br>
        <label for="">Telefono: </label><br>
            <input name="Telefono" type="text" value="{{$dato->Telefono}}"><br>
        <label for="">Email: </label><br>
            <input name="Email" type="text" value="{{$dato->Email}}"><br>
        <label for="">Facebook: </label><br>
            <input name="Facebook" type="text" value="{{$dato->Facebook}}"><br>
        <label for="">Instragram: </label><br>
            <input name="Instragram" type="text" value="{{$dato->Instragram}}"><br>
        <label for="">Twitter: </label><br>
            <input name="Twitter" type="text" value="{{$dato->Twitter}}"><br>
        <label for="">Linkedin: </label><br>
            <input name="Linkedin" type="text" value="{{$dato->Linkedin}}"><br>
        <label for="">Mision: </label><br>
            <input name="Mision" type="text" value="{{$dato->Mision}}"><br>
        <label for="">Vision: </label><br>
            <input name="Vision" type="text" value="{{$dato->Vision}}"><br>
        <button type="submit">Actualizar</button>
    </form>
@endforeach
@include('Libs.Header')
    <!--<div style="padding-top: 50px;
    padding-bottom: 50px"></div>-->
    <h1 class="text-center">Fundaciones</h1>
    <h3 class="text-center">Detalles de tus Fundaciones</h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Institucion</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Show</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arrayInstitucion as $dato)
                            <tr>
                                <td>{{$dato->idInstitucion}}</td>
                                <td>{{$dato->Nombre}}</td>
                                <td>{{$dato->Direccion}}</td>
                                <td>{{$dato->Telefono}}</td>
                                <td>{{$dato->Email}}</td>
                                <td>
                                    <a href="{{route('Institucion.show', $dato->idInstitucion)}}" class="btn btn-primary">Detalle</a>
                                </td>
                                <td>
                                    <a href="{{route('Institucion.edit', $dato->idInstitucion)}}" class="btn btn-warning">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('Institucion.destroy', $dato->idInstitucion) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                
                                </td>
                            </tr>
                        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Institucion</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Show</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>

@include('Libs.Footer')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@include('Libs.Finally')
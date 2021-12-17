@include('Libs.Header')
<!--<div style="padding-top: 50px;
    padding-bottom: 50px"></div>-->
    <h1 class="text-center">Estudiantes</h1>
    <h3 class="text-center">Tabla de los estudiantes</h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Inscripto</th>
                <th>Show</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arrayEstudiantes as $dato)
                            <tr>
                                <td>{{$dato->idEstudiante}}</td>
                                <td>{{$dato->Nombre}}</td>
                                <td>{{$dato->Apellido}}</td>
                                <td>{{$dato->Dni}}</td>
                                <td>{{$dato->Email}}</td>
                                <td>{{$dato->Telefono}}</td>
                                <td>{{$dato->Inscripto}}</td>
                                <td>
                                    <a href="#">Detalle</button>
                                </td>
                                <td>
                                    <a href="#">Editar</a>
                                </td>
                                <td>
                                    <form action="#">Eliminar</button>
                                    </form>
                                
                                </td>
                            </tr>
                        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Inscripto</th>
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
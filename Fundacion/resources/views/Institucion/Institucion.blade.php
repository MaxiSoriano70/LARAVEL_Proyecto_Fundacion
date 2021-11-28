<h1>Instituciones</h1>
    <table>
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
                        <a href="{{route('Institucion.show', $dato->idInstitucion)}}">Show</a>
                    </td>
                    <td>
                        <a href="{{route('Institucion.edit', $dato->idInstitucion)}}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('Institucion.destroy', $dato->idInstitucion) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type='submit'>Delete</button>
                        </form>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
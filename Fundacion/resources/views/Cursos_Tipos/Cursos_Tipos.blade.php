@include('Libs.Header')
    <div class="container my-3">
        <h1 class="text-center">Cursos X Tipos</h1>
    </div>
    <div class="container my-3">
        <div class="row">
                <div class="col text-center">
                <a href="{{route('Cursos_Tipos.create')}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="25" height="25"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667zM121.83333,93.16667h-28.66667v28.66667h-14.33333v-28.66667h-28.66667v-14.33333h28.66667v-28.66667h14.33333v28.66667h28.66667z"></path></g></g></svg>
                     <b style="font-size:20px">Agregar</b></a>
                </div>
        </div>
    </div>
    <div class="container my-3">
        <h3 class="text-center">Tabla de Cursos X Tipos</h3>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Curso</th>
                <th>Comision</th>
                <th>Modalidad</th>
                <th>Duración</th>
                <th>Turno</th>
                <th>Vacantes</th>
                <th>Precio</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arrayCursos_Tipos as $dato)
                            <tr>
                                <td>{{$dato->Curso}}</td>
                                <td>{{$dato->Comision}}</td>
                                <td>{{$dato->Modalidad}}</td>
                                <td>{{$dato->Duracion}}</td>
                                <td>{{$dato->Turno}}</td>
                                <td>{{$dato->Vacantes}}</td>
                                <td>{{$dato->Precio}}</td>
                                <td>
                                    <a href="{{route('Cursos_Tipos.show', $dato->idCursoXTipo)}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="25" height="25"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M32.25,16.125v26.875h-5.375v10.75h16.125v-10.75v-16.125h86v61.47656c3.40238,-1.20938 7.00363,-1.96784 10.75,-2.21509v-70.01148zM86,48.375c-11.81046,0 -21.5,9.68954 -21.5,21.5c0,6.00113 2.5193,11.43512 6.52979,15.34815c-7.16381,4.84556 -11.90479,13.04552 -11.90479,22.27685h10.75c0,-8.89318 7.23182,-16.125 16.125,-16.125c8.89318,0 16.125,7.23182 16.125,16.125h10.75c0,-9.23134 -4.74098,-17.43129 -11.90479,-22.27685c4.01049,-3.91303 6.52979,-9.34702 6.52979,-15.34815c0,-11.81046 -9.68954,-21.5 -21.5,-21.5zM32.25,59.125v10.75h-5.375v10.75h16.125v-10.75v-10.75zM86,59.125c6.00073,0 10.75,4.74927 10.75,10.75c0,6.00073 -4.74927,10.75 -10.75,10.75c-6.00073,0 -10.75,-4.74927 -10.75,-10.75c0,-6.00073 4.74927,-10.75 10.75,-10.75zM32.25,86v10.75h-5.375v10.75h16.125v-10.75v-10.75zM142.4375,96.75c-16.125,0 -29.5625,13.4375 -29.5625,29.5625c0,6.45 2.15,11.8229 5.375,16.6604l-19.8833,19.8938l7.5166,7.5166l19.8938,-19.8833c4.8375,3.225 10.7479,5.375 16.6604,5.375c16.125,0 29.5625,-13.4375 29.5625,-29.5625c0,-16.125 -13.4375,-29.5625 -29.5625,-29.5625zM142.4375,107.5c10.2125,0 18.8125,8.6 18.8125,18.8125c0,10.2125 -8.6,18.8125 -18.8125,18.8125c-10.2125,0 -18.8125,-8.6 -18.8125,-18.8125c0,-10.2125 8.6,-18.8125 18.8125,-18.8125zM32.25,118.25v26.875h74.55713c-1.76838,-3.33787 -3.0944,-6.9445 -3.87378,-10.75h-59.93335v-16.125z"></path></g></g></svg>
                                         <b>Detalle</b></a>
                                </td>
                                <td>
                                    <a href="{{route('Cursos_Tipos.edit', $dato->idCursoXTipo)}}" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="25" height="25"
                                        viewBox="0 0 172 172"
                                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M138.52092,66.42067l8.74333,-8.74333c9.08017,-9.08017 9.08017,-23.85783 0,-32.94158c-4.39675,-4.39317 -10.24117,-6.80833 -16.47258,-6.80833c-6.23142,0 -12.07942,2.41875 -16.47258,6.81192l-8.73975,8.73975zM97.97908,41.07933l-64.74725,64.74725c-1.37958,1.37958 -2.4295,3.08167 -3.03867,4.92708l-12.00417,36.26692c-0.64142,1.92783 -0.13617,4.05275 1.30075,5.48967c1.02842,1.02483 2.39725,1.57308 3.80192,1.57308c0.56617,0 1.13592,-0.08958 1.69133,-0.27233l36.25617,-12.00775c1.85258,-0.60917 3.55825,-1.65908 4.93783,-3.04225l64.74367,-64.74367z"></path></g></g></svg> <b>Editar</b></a>
                                </td>
                                <td>
                                    @if ($dato->Eliminado==1)
                                    <form action="{{ route('Cursos_Tipos.destroy', $dato->idCursoXTipo) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="25" height="25"
                                            viewBox="0 0 172 172"
                                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M85.91042,14.25495c-3.16203,0.04943 -5.68705,2.6496 -5.64375,5.81172v2.86667h-31.53333c-1.53406,-0.02082 -3.01249,0.574 -4.10468,1.65146c-1.09219,1.07746 -1.70703,2.54767 -1.70704,4.08187h-8.52161c-2.06765,-0.02924 -3.99087,1.05709 -5.03322,2.843c-1.04236,1.78592 -1.04236,3.99474 0,5.78066c1.04236,1.78592 2.96558,2.87225 5.03322,2.843h103.2c2.06765,0.02924 3.99087,-1.05709 5.03322,-2.843c1.04236,-1.78592 1.04236,-3.99474 0,-5.78066c-1.04236,-1.78592 -2.96558,-2.87225 -5.03322,-2.843h-8.52161c-0.00001,-1.53421 -0.61486,-3.00442 -1.70704,-4.08187c-1.09219,-1.07746 -2.57061,-1.67228 -4.10468,-1.65146h-31.53333v-2.86667c0.02122,-1.54972 -0.58581,-3.04203 -1.68279,-4.1369c-1.09698,-1.09487 -2.59045,-1.69903 -4.14013,-1.67482zM34.4,51.6l10.27969,87.34375c0.67653,5.77347 5.56348,10.12292 11.37708,10.12292h59.88646c5.8136,0 10.69482,-4.34945 11.37708,-10.12292l10.27969,-87.34375z"></path></g></g></svg> <b>Eliminar</b></button>
                                    @else
                                    <form action="{{ route('Cursos_Tipos.destroy', $dato->idCursoXTipo) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="25" height="25"
                                            viewBox="0 0 172 172"
                                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-43.61533,0 -79.12,35.50467 -79.12,79.12c0,43.61533 35.50467,79.12 79.12,79.12c43.61533,0 79.12,-35.50467 79.12,-79.12c0.03509,-2.48118 -1.2685,-4.78904 -3.41161,-6.03987c-2.1431,-1.25083 -4.79369,-1.25083 -6.93679,0c-2.1431,1.25083 -3.4467,3.55869 -3.41161,6.03987c0,36.17891 -29.18109,65.36 -65.36,65.36c-36.17891,0 -65.36,-29.18109 -65.36,-65.36c0,-36.17891 29.18109,-65.36 65.36,-65.36c18.83675,0 35.74811,7.93958 47.66281,20.64h-13.26281c-2.48118,-0.03509 -4.78904,1.2685 -6.03987,3.41161c-1.25083,2.1431 -1.25083,4.79369 0,6.93679c1.25083,2.1431 3.55869,3.4467 6.03987,3.41161h37.84v-37.84c0.02542,-1.85848 -0.7021,-3.6482 -2.01701,-4.96184c-1.3149,-1.31364 -3.10532,-2.03944 -4.96378,-2.01223c-3.79707,0.05565 -6.83116,3.17694 -6.77922,6.97406v15.56734c-14.48061,-15.88829 -35.3368,-25.88734 -58.48,-25.88734z"></path></g></g></svg> <b>Recuperar</b></button>
                                    @endif
                                    </form>

                                </td>
                            </tr>
                        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Curso</th>
                <th>Comision</th>
                <th>Modalidad</th>
                <th>Duración</th>
                <th>Turno</th>
                <th>Vacantes</th>
                <th>Precio</th>
                <th>Detalle</th>
                <th>Editar</th>
                <th>Eliminar</th>
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

@include('Libs.Header')
<div class="row mt-5">
  <div class="d-flex justify-content-center">
      <h1 class="text-center">DETALLE DE ESTUDIANTE</h1>
  </div>
</div>
<div class="row mt-2">
  <div class="d-flex justify-content-center">
    <h3 class="text-center">DATOS</h3>
  </div>
</div>
    @foreach ($arrayEstudiantes as $item)
    <div class="card text-center">
        <div class="card-header">
          <h4><b>"{{$item->Nombre}} {{$item->Apellido}}"</b></h4>
        </div>
        <div class="card-body">
          <h5 class="card-text"><b>Nombre: </b>{{$item->Nombre}}</h5>
          <h5 class="card-text"><b>Apellido: </b>{{$item->Apellido}}</h5>
          <h5 class="card-text"><b>Dni: </b>{{$item->Dni}}</h5>
          <h5 class="card-text"><b>Email: </b>{{$item->Email}}<h5>
          <h5 class="card-text"><b>Telefono: </b>
            @if ($item->Codigo_Area=="" || $item->Telefono=="")
                "No definido"
            @else
            {{$item->Codigo_Area}}-{{$item->Telefono}}
            @endif
            </h5>
          <h5 class="card-text"><b>Fecha de Nacimiento: </b>
            @if ($item->Fecha_Nacimiento=="")
                "No definido"
            @else
            {{$item->Fecha_Nacimiento}}
            @endif
            </h5>
          <h5 class="card-text"><b>Dirección: </b>
            @if ($item->Direccion=="")
                "No definido"
            @else
            {{$item->Direccion}}
            @endif
            </h5>
            <div>
              <a class="btn btn-warning my-2" href="{{ route('Estudiantes.edit',$item->idEstudiante); }}"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="25" height="25"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000"><path d="M138.52092,66.42067l8.74333,-8.74333c9.08017,-9.08017 9.08017,-23.85783 0,-32.94158c-4.39675,-4.39317 -10.24117,-6.80833 -16.47258,-6.80833c-6.23142,0 -12.07942,2.41875 -16.47258,6.81192l-8.73975,8.73975zM97.97908,41.07933l-64.74725,64.74725c-1.37958,1.37958 -2.4295,3.08167 -3.03867,4.92708l-12.00417,36.26692c-0.64142,1.92783 -0.13617,4.05275 1.30075,5.48967c1.02842,1.02483 2.39725,1.57308 3.80192,1.57308c0.56617,0 1.13592,-0.08958 1.69133,-0.27233l36.25617,-12.00775c1.85258,-0.60917 3.55825,-1.65908 4.93783,-3.04225l64.74367,-64.74367z"></path></g></g></svg> <b>Editar Estudiante</b></a>
            </div>
            <div>
              <a href="{{route('Estudiantes.index')}}" type="button" class="btn btn-secondary my-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="25" height="25"
                viewBox="0 0 172 172"
                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,172c47.41968,0 86,-38.58032 86,-86c0,-47.41968 -38.58032,-86 -86,-86c-47.41968,0 -86,38.58032 -86,86c0,47.41968 38.58032,86 86,86zM36.88314,83.46647l32.25,-32.25c0.68587,-0.68587 1.6027,-1.0498 2.53353,-1.0498c0.46191,0 0.92733,0.08748 1.37175,0.27295c1.34025,0.5529 2.21159,1.86165 2.21159,3.31038v7.16667c0,0.95182 -0.37793,1.86165 -1.0498,2.53353l-15.38314,15.38314h73.76628c1.98063,0 3.58333,1.6027 3.58333,3.58333v7.16667c0,1.98063 -1.6027,3.58333 -3.58333,3.58333h-73.76628l15.38314,15.38314c0.67187,0.67188 1.0498,1.58171 1.0498,2.53353v7.16667c0,1.44873 -0.87134,2.75749 -2.21159,3.31038c-1.34375,0.5599 -2.87996,0.24845 -3.90527,-0.77686l-32.25,-32.25c-1.39974,-1.39974 -1.39974,-3.66732 0,-5.06706z"></path></g></g></svg> <b>Volver</b></a>
            </div>
        </div>
            <div class="card-footer text-muted">
                  <h4>
                  @if ($item->idTipo==3)
                      <b>Tipo de Usuario:</b> Estudiante
                  @endif
                  </h4>
            </div>
    </div>
    @endforeach

@include('Libs.Footer')
@include('Libs.Finally')

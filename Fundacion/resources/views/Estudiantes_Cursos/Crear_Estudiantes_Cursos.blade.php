@include('Libs.Header')
<div class="row mt-5">
    <div class="d-flex justify-content-center">
        <h1>ALTA DE ESTUDIANTES X CURSOS</h1>
    </div>
</div>
<div class="row mt-5">
<div class="d-flex justify-content-center">
<form class="mt-3 w-75 needs-validation" novalidate method="post" action="{{route('Estudiantes_Cursos.store');}}">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="">*Alumnos</label>
        <select class="form-select" name="Alumno" aria-label="Default select example" required>
        <option selected>Seleccionar Alumno</option>
          @foreach ($arrayEstudiantes as $item)
            <option value="{{$item->idEstudiante}}">{{$item->Nombre}} {{$item->Apellido}}</option>
          @endforeach
        </select>
        @if ($errors->has('Alumno'))
          <div>*El campo Curso no puede se null</div><br>
        @endif
    </div>
    <div class="mb-3">
        <label class="form-label" for="">*Cursos</label>
        <select class="form-select" name="Curso" aria-label="Default select example" required>
        <option selected>Seleccionar Curso</option>
          @foreach ($arrayCursos as $item)
            <option value="{{$item->idCursoXTipo}}"><b>{{$item->Curso}}:</b> Com. <b>{{$item->Comision}}</b> Mod. <b>{{$item->M}}</b> Hor.
            @if ($item->Horario=="")
                No Definido
            @else
                {{$item->Horario}}
            @endif
            </option>
          @endforeach
        </select>
        @if ($errors->has('Curso'))
          <div>*El campo Curso no puede se null</div><br>
        @endif
    </div>
    <div id="emailHelp" class="form-text my-3">Los campos con * son abligatorios.</div>
    <div class="mb-3">
        <a href="{{route('Estudiantes_Cursos.index')}}" type="button" class="btn btn-secondary mx-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="25" height="25" viewBox="0 0 172 172"
        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,172c47.41968,0 86,-38.58032 86,-86c0,-47.41968 -38.58032,-86 -86,-86c-47.41968,0 -86,38.58032 -86,86c0,47.41968 38.58032,86 86,86zM36.88314,83.46647l32.25,-32.25c0.68587,-0.68587 1.6027,-1.0498 2.53353,-1.0498c0.46191,0 0.92733,0.08748 1.37175,0.27295c1.34025,0.5529 2.21159,1.86165 2.21159,3.31038v7.16667c0,0.95182 -0.37793,1.86165 -1.0498,2.53353l-15.38314,15.38314h73.76628c1.98063,0 3.58333,1.6027 3.58333,3.58333v7.16667c0,1.98063 -1.6027,3.58333 -3.58333,3.58333h-73.76628l15.38314,15.38314c0.67187,0.67188 1.0498,1.58171 1.0498,2.53353v7.16667c0,1.44873 -0.87134,2.75749 -2.21159,3.31038c-1.34375,0.5599 -2.87996,0.24845 -3.90527,-0.77686l-32.25,-32.25c-1.39974,-1.39974 -1.39974,-3.66732 0,-5.06706z"></path></g></g></svg> <b>Volver</b></a>
        <button type="submit" class="btn btn-primary mx-2"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="25" height="25"
        viewBox="0 0 172 172"
        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,17.2c-37.9948,0 -68.8,30.8052 -68.8,68.8c0,37.9948 30.8052,68.8 68.8,68.8c37.9948,0 68.8,-30.8052 68.8,-68.8c0,-37.9948 -30.8052,-68.8 -68.8,-68.8zM124.45347,72.85347l-43.344,43.344c-1.07787,1.07787 -2.53413,1.67987 -4.05347,1.67987c-1.51933,0 -2.98133,-0.602 -4.05347,-1.67987l-19.7972,-19.7972c-2.24173,-2.24173 -2.24173,-5.8652 0,-8.10693c2.24173,-2.24173 5.8652,-2.24173 8.10693,0l15.74373,15.74373l39.29053,-39.29053c2.24173,-2.24173 5.8652,-2.24173 8.10693,0c2.24173,2.24173 2.24173,5.8652 0,8.10693z"></path></g></g></svg> <b>Enviar</b></button>
    </div>
  </form>
  </div>
</div>
@include('Libs.Footer')
@include('Libs.Finally')
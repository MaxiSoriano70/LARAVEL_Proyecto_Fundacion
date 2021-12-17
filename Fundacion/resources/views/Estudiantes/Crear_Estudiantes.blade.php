@include('Libs.Header')
<div class="row mt-5">
    <div class="d-flex justify-content-center">
        <h1>Alta de Alumnos</h1>
    </div>
</div>
<form class="mt-3 align-items-center w-75">
    <div class="mb-3">
        <label class="form-label" required>*Nombre</label>
        <input type="text" class="form-control" id="nombre">
      </div>
    <div class="mb-3">
        <label class="form-label">*Apellido</label>
        <input type="text" class="form-control" id="apellido">
    </div>
    <div class="mb-3">
        <label class="form-label">*Dni</label>
        <input type="number" class="form-control" id="dni">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">*Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">*Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">*Confirmar Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
    <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input type="text" class="form-control" id="Telefono">
      </div>
    <div class="mb-3">
        <label class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="FechadeNacimiento">
      </div>
    <div class="mb-3">
        <label class="form-label">Direccion</label>
        <input type="text" class="form-control" id="Direccion">
      </div>
    <div id="emailHelp" class="form-text my-3">Los campos con * son abligatorios.</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@include('Libs.Footer')
@include('Libs.Finally')
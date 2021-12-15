<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Institución</title>

    </head>
    <body >
        @include('Nav.Nav')
        <h1>BIENVENIDOS AL LOGIN</h1>
            <form method="POST" action="{{ route('Login.diferenciar'); }}">
                @csrf
                <label for="">Correo: </label><br>
                    <input name="Correo" type="text"><br>
                <label for="">Clave: </label><br>
                    <input name="Clave" type="text"><br>
                <button type="submit">Ingresar</button>
            </form>
            <a href="{{route('Login.create')}}">Registrate</a>
            </body>
</html>
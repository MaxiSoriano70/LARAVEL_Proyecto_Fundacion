<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Mis_CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('id')) {
            $idEstudiantes=session()->get('id');
            $MisCursos=DB::select("SELECT c.Nombre as Curso,cxt.Comision,cxt.idCursoXTipo,Duracion,Fecha_de_Inicio,Fecha_de_Fin,Turno,Horario
            FROM cursosxestudiantes cxe
            INNER JOIN cursosxtipos cxt
            INNER JOIN cursos c
            INNER JOIN tipos_cursos tc
            ON cxe.idCursoXTipo=cxt.idCursoXTipo
            AND cxt.idCurso=c.idCurso
            AND cxt.idTipo_Curso=tc.idTipo_Curso
            WHERE cxe.idEstudiante=$idEstudiantes");
            if($MisCursos){
                $parametros=[
                    "arrayMisCursos" => $MisCursos
                ];
                return view("Mis_Cursos.Mis_Cursos",$parametros);
            }
        }else{
            return redirect()->route("Login.index");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(session()->has('id')){
            $idKevin=session()->get('id');
            $MisCursos=DB::select("SELECT c.Nombre as Curso,cxt.idCursoXTipo,Comision,Duracion,Fecha_de_Inicio,Fecha_de_Fin,Turno,Horario,Precio,tc.Nombre as M,cxe.Estado,Total_a_Pagar,Deuda
            FROM cursosxestudiantes cxe
            INNER JOIN cursosxtipos cxt
            INNER JOIN cursos c
            INNER JOIN tipos_cursos tc
            ON cxe.idCursoXTipo=cxt.idCursoXTipo
            AND cxt.idCurso=c.idCurso
            AND cxt.idTipo_Curso=tc.idTipo_Curso
            WHERE cxe.idEstudiante=$idKevin and cxt.idCursoXTipo=$id");
            if($MisCursos){
                $parametros=[
                    "arrayMisCursos" => $MisCursos
                ];
                return view("Mis_Cursos.Mostrar_Mis_Cursos",$parametros);
            }
        }else{
            return redirect()->route("Login.index");
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

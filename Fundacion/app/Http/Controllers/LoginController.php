<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Login.Login");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function diferenciar(Request $request)
    {
        $Correo = $request->post("Correo");
        $Clave = $request->post("Clave");
        $Personal = DB::table("personal")->select("*")
        ->where("Email",$Correo)
        ->where("Clave",$Clave)
        ->get();
       
        if(count($Personal) == 1){
            $parametros = [
                "arrayUser" => $Personal
            ];
            return redirect()->route('Personal.index',$parametros);
        }
        elseif(count($Personal) == 0){
            $Estudiante = DB::table("estudiantes")->select("*")
            ->where("Email",$Correo)
            ->where("Clave",$Clave)
            ->get();
            if(count($Estudiante) == 1){
                $parametros = [
                    "arrayUser" => $Estudiante
                ];
                
                return view("Usuarios.index", $parametros);
            }
            else{
                echo "No estas Registrado";
            }
        }
        else{
            echo 'Usted no esta Registrado en el Sistema';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

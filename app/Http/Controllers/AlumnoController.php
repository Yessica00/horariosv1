<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $val;
    public function __construct(){
        $this->val=[
            'nombre'=>['required','min:3'],
            'apellidop'=>'required',
            'email'=>'required'
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos= Alumno::paginate(15); 
        //return view("alumnos/index" , ['alumnos' =>$alumnos]);
        return view("alumnos2/index" , compact('alumnos'));
    }

    public function create()
    {
        
        $alumnos= Alumno::paginate(15); 
        $alumno= new Alumno;
        $accion='C';
        $txtbtn='Guardar';
        $des="";
        return view("alumnos2/form", compact('alumnos', 'alumno','accion',
        'txtbtn','des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return$request;
            $val=$request->validate($this->val);

        Alumno::create($val);
        return redirect()->route("alumnos.index")->with('mensaje',"Insertado de manera segura");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $alumnos= Alumno::paginate(15); 
        $accion="D";
        $txtbtn='Confirmar Eliminacion';
        $des='disabled';

        return view("alumnos2.form", compact('alumnos','alumno','accion',
        'txtbtn','des'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        
        $alumnos= Alumno::paginate(15); 
       $accion='E';
       $txtbtn='Actualizar';
       $des="";
        return view("alumnos2/form" , compact('alumnos', 'alumno',
        'accion','txtbtn','des'));
    }

    /**
     * 'Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $val=$request->validate($this->val);

        $alumno->update($val);
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route("alumnos.index");
    }
}

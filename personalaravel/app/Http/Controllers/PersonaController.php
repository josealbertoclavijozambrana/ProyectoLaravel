<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
   public function  index(){
      $listaPersona = Persona::all();
      return view('persona.index',compact('listaPersona'));
   }

    public function  hola(){
        return "hola mundo";
    }


    public function create()
   {
       return view('persona.create');
   }

   public function store(Request $request)
   {
      $objPersona = new Persona();
      $objPersona->nombre =$request->get('nombre');
       $objPersona->apellido =$request->get('apellido');
       $objPersona->edad =$request->get('edad');
       $objPersona->ciudad =$request->get('ciudad');
       $objPersona->fechaNacimiento =$request->get('fechaNacimiento');
       $objPersona->save();

       return redirect('/persona');
   }
   public function edit($id){

       $objPersona =Persona::find($id);
       //return printf($objPersona);
       return view('persona.edit',compact('objPersona','id'));
   }

   public function  update(Request $request ,$id){
        $objPersona= Persona::find($id);
       $objPersona->nombre =$request->get('nombre');
       $objPersona->apellido =$request->get('apellido');
       $objPersona->edad =$request->get('edad');
       $objPersona->ciudad =$request->get('ciudad');
       $objPersona->fechaNacimiento =$request->get('fechaNacimiento');
       $objPersona->save();

       return redirect('/persona');

   }
   public  function destroy($id){
       $objPersona = Persona::find($id);
       $objPersona->delete();
       return redirect('/persona');
   }
}

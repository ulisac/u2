<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Validator;
	use Illuminate\Foundation\Validation\ValidatesRequests;
class UsuarioController extends Controller
{

	//---------------------------------------------------------

    public function index(Request $request){
    $validation = Validator::make( $request->all(), [
    'nombre' => 'required|string',
	        'perfil' => 'required',
	        'usuario' => 'required',
	        'ciudad' => 'required|string',
	        'correo' => 'required|string|email',
	        'nombre' => 'required|string',
	        'clave' => 'required|string',
	        'pasatiempos' => 'required|string',
	]);

if(count($request->all()) > 0){
if ( !$validation->fails() ) {
    $us = new Usuario;
	$us->nombre = $request->nombre;
	$us->perfil = $request->perfil;
	$us->usuario = $request->usuario;
	$us->ciudad = $request->ciudad;
	$us->correo = $request->correo;
	$us->clave = md5($request->clave);
	$us->pasatiempos = $request->pasatiempos;
	$us->save();
	return redirect('usuario/index');
}else{
	echo "no";
	return view('usuario/index');
}
}

	
	return view('usuario/index');
    	
    }

//---------------------------------------------------------


    public function login(Request $request){
    	$validation = Validator::make( $request->all(), [
	        'usuario' => 'required',
	        'clave' => 'required|string',
	]);
    	if(count($request->all()) > 0){
if ( !$validation->fails() ) {
     $us = Usuario::where('usuario', $request->usuario)->where('clave', md5($request->clave));
     if($us->count() == 0 ){
     	echo "no";
     }else{
     	$us2 = $us->get();
     	if($us2[0]->perfil == 'Administrador'){
     		return redirect('usuario/todos');
     	}
     	if($us2[0]->perfil == 'Usuario'){
     		return redirect('usuario/editar/'.$us2[0]->id);
     	}
     	
     }

	
}else{
	echo "no";
	return view('usuario/login');
}
}
    	return view('usuario/login');
    }

//---------------------------------------------------------
    public function editar(Request $request, $id){
   
    	$validation = Validator::make( $request->all(), [
	        'nombre' => 'required|string',
	        'perfil' => 'required',
	        'ciudad' => 'required|string',
	        'correo' => 'required|string|email',
	        'nombre' => 'required|string',
	        'pasatiempos' => 'required|string',
	]);
    	if(count($request->all()) > 0){
if ( !$validation->fails() ) {
     
	$us = Usuario::where('id', $id)->get();
	$us = $us[0];
	$us->nombre = $request->nombre;
	$us->usuario = $request->usuario;
	$us->ciudad = $request->ciudad;
	$us->correo = $request->correo;
	$us->pasatiempos = $request->pasatiempos;
	$us->save();


     	return redirect('usuario/editar')->with('us', $us);
     

	
}else{
	echo "no";
	return view('usuario/editar');
}
}
	$us = Usuario::where('id',$id)->get();
	if(count($us) > 0){
		$us = $us[0];
	}
    	return view('usuario/editar')->with('us', $us);
    }

//---------------------------------------------------------
    public function todos(){
    	return view('usuario/todos')->with('todos', Usuario::all());
    }


}

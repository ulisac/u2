<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;


class Usuario extends Model
{
     protected $table = 'users';


    protected $fillable = [
        'nombre', 'perfil', 'ciudad','usuario','correo','clave', 'pasatiempos'
    ];


    public function rules()
	{
	    return [
	        'nombre' => 'required|string',
	        'perfil' => 'required|in:Usuario,Administrador',
	        'ciudad' => 'required|string',
	        'correo' => 'required|string|email',
	        'nombre' => 'required|string',
	        'clave' => 'required|string',
	        'pasatiempos' => 'required|string',
	    ];
	}
}

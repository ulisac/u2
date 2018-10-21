@extends('plantilla')

@section('content')
    <form role="form" name="form1" method="GET">
	  <div class="form-group">
	    <label >Nombre</label>
	    <input type="text" class="form-control" value="{{$us->nombre}}" required name="nombre"
	        placeholder="Nombre">
	  </div>
	  <input type="hidden" name="id" value="{{$us->id}}">
	  <div class="form-group">
	    <label >Usuario</label>
	    <input type="text" class="form-control" disabled value="{{$us->usuario}}" required name="usuario"
	        placeholder="Usuario">
	  </div>
	  <div class="form-group">
	    <label >Correo</label>
	    <input type="email" class="form-control" value="{{$us->correo}}" required name="correo"
	        placeholder="Correo">
	  </div>
	  <div class="form-group">
	    <label >Ciudad</label>
	    <input type="text" class="form-control" value="{{$us->ciudad}}" required name="ciudad"
	        placeholder="Ciudad">
	  </div>
	  <div class="form-group">
	    <label >Pasatiempos</label>
	    <input type="text" class="form-control" value="{{$us->pasatiempos}}" required name="pasatiempos"
	        placeholder="pasatiempos">
	  </div>
	  <div class="form-group">
	    <label >Perfil 	</label>
	    <select class="form-control" disabled required name="perfil">
	    	<?php if ($us->perfil == 'Usuario'){ ?>
	    		<option value="Usuario" selected="selected">Usuario</option>
	    	<?php }else{ ?>
	    		<option value="Usuario">Usuario</option>
	    	<?php } ?> 
	    	<?php if ($us->perfil == 'Administrador'){ ?>
	    		<option value="Administrador" selected="selected">Administrador</option>
	    	<?php }else{ ?>
	    		<option value="Administrador">Administrador</option>
	    	<?php } ?> 
			  
			</select>
	  </div>
	  <div class="form-group">
	    <button type="submit" class="btn btn-primary"> Enviar</button>
	  </div>
	</form>
@stop
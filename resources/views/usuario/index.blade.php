@extends('plantilla')

@section('content')

    <form role="form" name="form1" method="GET">
	  <div class="form-group">
	    <label >Nombre</label>
	    <input type="text" class="form-control" required name="nombre"
	        placeholder="Nombre">
	  </div>
	  <div class="form-group">
	    <label >Usuario</label>
	    <input type="text" class="form-control" required name="usuario"
	        placeholder="Usuario">
	  </div>
	  <div class="form-group">
	    <label >Clave</label>
	    <input type="password" class="form-control" required name="clave"
	        placeholder="Clave">
	  </div>
	  <div class="form-group">
	    <label >Correo</label>
	    <input type="email" class="form-control" required name="correo"
	        placeholder="Correo">
	  </div>
	  <div class="form-group">
	    <label >Ciudad</label>
	    <input type="text" class="form-control" required name="ciudad"
	        placeholder="Ciudad">
	  </div>
	  <div class="form-group">
	    <label >Pasatiempos</label>
	    <input type="text" class="form-control" required name="pasatiempos"
	        placeholder="pasatiempos">
	  </div>
	  <div class="form-group">
	    <label >Perfil</label>
	    <select class="form-control" required name="perfil">
			  <option value="Usuario">Usuario</option>
			  <option value="Administrador">Administrador</option>
			</select>
	  </div>
	  <div class="form-group">
	    <button type="submit" class="btn btn-primary"> Enviar</button>
	  </div>
	</form>
@stop
@extends('plantilla')

@section('content')

    <form role="form" name="form1" method="GET">
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
	    <button type="submit" class="btn btn-primary"> Enviar</button>
	  </div>
	</form>
@stop
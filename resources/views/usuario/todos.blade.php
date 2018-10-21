@extends('plantilla')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col"><ISINDEX></ISINDEX></th>
      <th scope="col">nombre</th>
      <th scope="col">username</th>
      <th scope="col">perfil</th>
      <th scope="col">correo</th>
      <th scope="col">acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($todos as $item) { ?>
    
    <tr>
      
      <td>{{ $item->id}}</td>
      <td>{{ $item->nombre}}</td>
      <td>{{ $item->usuario}}</td>
      <td>{{ $item->perfil}}</td>
      <td>{{ $item->correo}}</td>
      <td>
        <a href="/usuario/editar/<?= $item->id ?>" class="btn btn-primary">Editar</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
@stop
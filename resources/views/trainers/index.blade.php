@extends('layouts.app')

@section('title', 'Trainers')

@section('content')

<div style="margin-top:30px;" class="text-center">
<h3>Listado de Trainers</h3>
<p>Esto no es un listado de trainers, en realidad es un listado de mejores amigos, profesores y familia. Bienvenidos a mi Blog</p>
<a href="/trainers/create" class="btn btn-primary">Crear</a>
</div>
<!-- Esto sirve para ejecutar lo que le controlador esta mandando y colocar en un arreglo todos los registros -->
<!-- ($trainers as $trainer) Con esto dice que cada trainers que encuentre le ponga trainer -->
<div class="row">
@foreach($trainers as $trainer)
<!-- Con esto accedemos a la Variable y al id y el nombre del registro -->
<div class="col-sm">
<div class="card text-center" style="width: 18rem; margin-top:20px;">
 <img style="margin-top:20px;" src="images/{{$trainer->avatar}}" class="card-img-top" alt="" height="250px">
  <div class="card-body">
    <h5 class="card-title">{{$trainer->name}}</h5>
    <p class="card-text">{{$trainer->description}}</p>
    <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más</a>
  </div>
</div>
</div>

@endforeach
<!--  -->
</div>

<!-- Aqui abajo se coloca un card de bootstrap para colocar el registro -->





@endsection
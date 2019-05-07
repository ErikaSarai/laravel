@extends('layouts.app')

@section('title', 'Trainers')

@section('content')

<h3>Listado de Trainers</h3>
<p>Esto no es un listado de trainers, en realidad es un listado de mejores amigos, profesores y familia. Bienvenidos a mi Blog</p>

<!-- Esto sirve para ejecutar lo que le controlador esta mandando y colocar en un arreglo todos los registros -->
<!-- ($trainers as $trainer) Con esto dice que cada trainers que encuentre le ponga trainer -->
<div class="row">
@foreach($trainers as $trainer)
<!-- Con esto accedemos a la Variable y al id y el nombre del registro -->
<div class="col-sm">
<div class="card" style="width: 18rem;">
 <img src="images/{{$trainer->avatar}}" class="card-img-top" alt="" height="250px">
  <div class="card-body">
    <h5 class="card-title">{{$trainer->id}} {{$trainer->name}}</h5>
    <p class="card-text">{{$trainer->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

@endforeach
<!--  -->
</div>

<!-- Aqui abajo se coloca un card de bootstrap para colocar el registro -->





@endsection
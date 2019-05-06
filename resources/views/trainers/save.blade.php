@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

<!-- El form es para darle una acción a nuestro formulario y asi poder crear, guardar, eliminar, etc -->
<!-- Lleva un método (GET, POST, DELETE, etc) y una acción (ruta) -->
<div class="container">
 <h1> Su Entrenador ha sido registrado exitosamente</h1>

    <a href="{{url('trainers')}}" class="btn btn-primary">Ver Entrenadores</a>
</div>



@endsection

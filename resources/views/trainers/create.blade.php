@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

<!-- El form es para darle una acción a nuestro formulario y asi poder crear, guardar, eliminar, etc -->
<!-- Lleva un método (GET, POST, DELETE, etc) y una acción (ruta) -->

{{-- enctype="multipart/form-data" es un método para las imágenes IMPORTANTE --}}

 <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
 
 <!-- MUY IMPORTANTE para ejecutar un formulario, es para dar seguridad al formulario, es obligatorio, sino dara error -->
 @csrf
    <div class="form-group">
    <label for="">Nombre</label>
    <!-- Y el input NECESITA UN NOMBRE  para IDENTIFICARSE -->
    <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="">Avatar</label>
      <!-- Y el input NECESITA UN NOMBRE  para IDENTIFICARSE -->
      <input type="file" name="avatar">
      </div>

    <button type="submit" class="btn btn-primary">Guardar</button>


 </form>

@endsection



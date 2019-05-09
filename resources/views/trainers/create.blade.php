@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
{{-- Esto es para verificar que funcione las validaciones, significa que si nuestra variable error existe --}}
@if ($errors->any())

    <div class="alert alert-danger">

      <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
      </ul>
  
    </div>

@endif

<!-- El form es para darle una acción a nuestro formulario y asi poder crear, guardar, eliminar, etc -->
<!-- Lleva un método (GET, POST, DELETE, etc) y una acción (ruta) -->

{{-- enctype="multipart/form-data" es un método para las imágenes IMPORTANTE --}}

 <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
 
 <!-- MUY IMPORTANTE para ejecutar un formulario, es para dar seguridad al formulario, es obligatorio, sino dara error -->
 @csrf
   {{-- Para incluir sub_view_form debemos escribir esto: --}}

   @include('trainers.sub_view_form')


    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/trainers" class="btn btn-primary">Ver lista de trainers</a>

 </form>

@endsection



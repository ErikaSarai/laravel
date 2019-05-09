@extends('layouts.app')

@section('title', 'Trainers Edit')

@section('content')

<!-- El form es para darle una acción a nuestro formulario y asi poder crear, guardar, eliminar, etc -->
<!-- Lleva un método (GET, POST, DELETE, etc) y una acción (ruta) -->

{{-- enctype="multipart/form-data" es un método para las imágenes IMPORTANTE --}}

 <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
    {{-- Es necesario para actualizar una información --}}
    @method('PUT') 
 
 <!-- MUY IMPORTANTE para ejecutar un formulario, es para dar seguridad al formulario, es obligatorio, sino dara error -->
 @csrf
    <div class="form-group">
    <label for="">Nombre</label>
    <!-- Y el input NECESITA UN NOMBRE  para IDENTIFICARSE -->
    <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="">Descripción</label>
      <!-- Y el input NECESITA UN NOMBRE  para IDENTIFICARSE -->
      <input type="text" name="description" value="{{$trainer->description}}" class="form-control">
      </div>

    <div class="form-group">
      <label for="">Avatar</label>
      <!-- Y el input NECESITA UN NOMBRE  para IDENTIFICARSE -->
      {{-- Esto también es importante para que funcione base64= onchange="encodeImageFileAsURL(this) --}}

      <input type="file" value="/images/{{$trainer->avatar}}" name="avatar" onchange="encodeImageFileAsURL(this)" >
      <h5 style="margin-top:20px">Imagen actual</h5>

      {{-- Es importante colocarle un id para que este identificado y pueda funcionar base64 --}}
      <img style="margin-top:20px; text-aling:left" src="/images/{{$trainer->avatar}}" class="d-block" alt="" height="250px" id="change_img">
      </div>



    <button type="submit" class="btn btn-primary">Actualizar</button>


 </form>

 {{-- Esto es base64 sirve para cambiar la imagen al momento que le doy click a otra es muy cool --}}
 <script>
  function encodeImageFileAsURL(element) {
    var file = element.files[0];
    var reader = new FileReader();
    reader.onloadend = function() {
      console.log('RESULT', reader.result)
      document.getElementById('change_img').src = reader.result;
    }
    reader.readAsDataURL(file);
  }
  </script>
@endsection



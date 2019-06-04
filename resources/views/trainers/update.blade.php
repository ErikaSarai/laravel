@extends('layouts.app')

@section('title', 'Trainers Edit')

@section('content')

<!-- El form es para darle una acción a nuestro formulario y asi poder crear, guardar, eliminar, etc -->
<!-- Lleva un método (GET, POST, DELETE, etc) y una acción (ruta) -->

{{-- enctype="multipart/form-data" es un método para las imágenes IMPORTANTE --}}

<div class="text-center" style="margin-top:50px;">
<h1>Su Perfil ha sido Actualizado Exitosamente</h1>


    <a href="/trainers" class="btn btn-primary">Volver a la lista de trainers</a>

</div>


@endsection
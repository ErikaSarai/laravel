@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

<img style="margin-top:20px;" src="/images/{{$trainer->avatar}}" class="mx-auto d-block" alt="" height="300px">

<div class="text-center">
    <h4>{{$trainer->name}}</h4>
<p> {{$trainer->description}} </p>
<a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Actualizar</a>


<form style="margin-top:20px;" class="form-group" method="POST" action="/trainers/{{$trainer->slug}}">
@method ('DELETE')

@csrf
    <button type="submit" class="btn btn-danger">Eliminar</button>

</form>

</div>
@endsection
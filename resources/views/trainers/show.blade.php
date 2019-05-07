@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

<img style="margin-top:20px;" src="/images/{{$trainer->avatar}}" class="mx-auto d-block" alt="" height="300px">

<div class="text-center">
    <h4>{{$trainer->name}}</h4>
<p> {{$trainer->description}} </p>
</div>
@endsection
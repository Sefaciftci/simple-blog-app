@extends('layouts.front')


@section('title' ,'home')

@section('main')


<h3>Register</h3>
<form action="{{route('register')}}" method="POST"> 
    @csrf
    <input name="name" type="text" placeholder="name"/>
    <input name="email" type="mail"
    placeholder="email"/>
    <input name="password" type="password" placeholder="password"/>
    <input type="submit" value="Kaydet">
</form>

@if(errors->any()){
    @foreach (errors->all() as error)
    <div class="alert alert danger">{{$error}}</div>
    @endforeach
}

<br><hr><br>

@endsection
@extends('layouts.app') 

@section('content')


<h1>{{auth()->user()->name }}</h1>
<form method="POST" action="{{ route('logout')}}">
@csrf
<button class="btn btn-danger btn-xs btn-block"> Cerrar sesión</button>

</form>

@endsection
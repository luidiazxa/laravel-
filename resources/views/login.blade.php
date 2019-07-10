@extends('layouts.app') 

@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title">Acceso a la aplicacion</h1>
            
            </div>
    </div>
<form method="POST" action="{{ route('login')}}">
   @csrf
    <div class="form-group {{ $errors->has('email') ? 'alert alert-danger' : ''}}">
        <label for="email">Correo</label>
        <input class="form-control"
        type="email"
        name="email"
        value="{{old('email')}}"
        placeholder="Ingresa tu email">
        
{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group {{ $errors->has('password') ? 'alert alert-danger' : ''}}">
            <label for="password">Contraseña</label>
            <input class="form-control"
            type="password"
            name="password"
            placeholder="Ingresa tu contraseña">
            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
        </div>
        <button class="btn btn-success btn-block">Acceder</button>
        <br>
</form>


    
@endsection
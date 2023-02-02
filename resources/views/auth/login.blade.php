@extends('layouts.auth-master')

@section('content')
    <form action="/login" method="POST"  class="container w-25">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        
        <h1 class="h3 mb-3 fw-normal">Inicio de sesion</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Correo o nombre de usuario</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Contraseña</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <p>¿No tienes cuenta?<a href="">registrate</a></p>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
        
        
    </form>
@endsection
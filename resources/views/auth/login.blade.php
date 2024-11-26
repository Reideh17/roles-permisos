@extends('layouts.app')  <!-- Asegúrate de que el layout Skote esté bien configurado -->

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
    <div class="auth-box">
        <div class="text-center">
            <h3>Iniciar sesión</h3>
        </div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Número de documento o correo electrónico</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" required autofocus>
                @error('username') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>

            @if(session('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>
            @endif
        </form>
    </div>
</div>
@endsection

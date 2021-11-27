@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de administración</h1>
@stop

@section('content')
    <p>Bienvenido a este hermoso panel de administración.</p>
@stop
@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
  <a href="{{ route('login') }}" >Iniciar Sesión</a>
  @endunless
@endsection
@section('css')
 
@stop

@section('js')
    <script> 
    // prueba de alertas
        Swal.fire('Bienvenido {{ Auth::user()->name }} te haz conectado con exito')
    </script>
@stop
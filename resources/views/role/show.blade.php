@extends('adminlte::page')

@section('title', 'Ver Rol')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Detalle del Rol "{{$role->name}}"</h1></div>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-gradient-olive">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><h2 class="h4">{{$role->name}}</h2></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-block bg-gradient-purple btn-sm" href="{{ route('roles.index') }}">Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del Rol:</strong> "{{ $role->name }}"
                        </div>
                        
                        <h2 class="h3">Permisos Habilitados:</h2>
                        @foreach ($permissions as $permission)
                        <div class="form-group">
                            <li>
                                {{ $permission->description }}
                            </li>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
  <a href="{{ route('login') }}" >Iniciar Sesión</a>
  @endunless
@endsection
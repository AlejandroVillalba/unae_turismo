@extends('adminlte::page')

@section('title', 'Ver Detalle Habitacion')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Ver Detalle Habitacion</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Detalle Habitacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalle-habitacions.index') }}"> Salir</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Camas:</strong>
                            {{ $detalleHabitacion->cama }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad de camas:</strong>
                            {{ $detalleHabitacion->cantidadCama }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad de personas que pueden estar en la Habitacion:</strong>
                            {{ $detalleHabitacion->cantidadPersona }}
                        </div>
                        <div class="form-group">
                            <strong>Tamaño de la Habitacion (opcional):</strong>
                            {{ $detalleHabitacion->dimension }}
                        </div>
                        <div class="form-group">
                            <strong>Baños:</strong>
                            {{ $detalleHabitacion->banos }}
                        </div>

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
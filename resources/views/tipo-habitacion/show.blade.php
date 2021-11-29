@extends('adminlte::page')

@section('title', 'Ver tipo de habitacion')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Ver tipo de habitación</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver tipo de habitación</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-habitacions.index') }}"> salir</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoHabitacion->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

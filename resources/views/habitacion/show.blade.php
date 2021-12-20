@extends('adminlte::page')

@section('template_title')
    {{ $habitacion->name ?? 'Show Habitacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Habitacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('habitacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Habitacions Id:</strong>
                            {{ $habitacion->tipo_habitacions_id }}
                        </div>
                        <div class="form-group">
                            <strong>Alojamiento Id:</strong>
                            {{ $habitacion->alojamiento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle Habitacion Id:</strong>
                            {{ $habitacion->detalle_habitacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $habitacion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $habitacion->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $habitacion->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Disponible:</strong>
                            {{ $habitacion->disponible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

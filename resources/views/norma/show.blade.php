@extends('adminlte::page')

@section('title', 'Ver Normas')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Ver Normas</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Normas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('normas.index') }}"> Salir</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $norma->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ingreso:</strong>
                            {{ $norma->ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Salida:</strong>
                            {{ $norma->salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('adminlte::page')

@section('title', 'Editar Categoria de alojamiento')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Categoria de alojamiento</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Categoria de alojamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categoria-alojamientos.index') }}"> Salir</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoriaAlojamiento->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

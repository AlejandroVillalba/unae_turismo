@extends('adminlte::page')

@section('template_title')
    {{ $alojamiento->name ?? 'Show Alojamiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alojamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alojamientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $alojamiento->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Alojamiento Id:</strong>
                            {{ $alojamiento->categoria_alojamiento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $alojamiento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $alojamiento->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Imagenes:</strong>
                            {{ $alojamiento->imagenes }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $alojamiento->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $alojamiento->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $alojamiento->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

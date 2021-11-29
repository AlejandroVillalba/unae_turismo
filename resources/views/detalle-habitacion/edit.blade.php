@extends('adminlte::page')

@section('title', 'Editar Detalle Habitacion')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Editar Detalle Habitacion</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Detalle de Habitacion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('detalle-habitacions.update', $detalleHabitacion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('detalle-habitacion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

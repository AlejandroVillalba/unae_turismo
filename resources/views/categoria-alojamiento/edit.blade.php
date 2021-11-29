@extends('adminlte::page')

@section('title', 'Editar Categoria de alojamiento')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Actualizar Categoria de alojamiento</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Categoria de alojamiento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categoria-alojamientos.update', $categoriaAlojamiento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('categoria-alojamiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

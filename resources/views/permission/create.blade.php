@extends('adminlte::page')

@section('title', 'Crear Permiso')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Crear un nuevo Permiso</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card bg-gradient-info">
                    <div class="card-header">
                        <span class="card-title">Crear permiso de usuarios:</span>
                        <div class="float-right">
                            <a class="btn btn-block bg-gradient-primary btn-sm" href="{{ route('permissions.index') }}"> Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                      
                        <form method="POST" action="{{ route('permissions.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('permission.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
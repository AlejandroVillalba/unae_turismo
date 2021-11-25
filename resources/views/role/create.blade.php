@extends('adminlte::page')

@section('title', 'Crear Rol')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Crear un nuevo Rol</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <span class="card-title">Crear rol de usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('role.form')

                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

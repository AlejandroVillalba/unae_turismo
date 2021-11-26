@extends('adminlte::page')

@section('title', 'Editar Rol')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Editar Rol</h1></div>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card bg-gradient-olive">
                    <div class="card-header">
                        <span class="card-title">Actualizar Rol: "{{$role->name}}"</span>
                        <div class="float-right">
                            <a class="btn btn-block bg-gradient-purple btn-sm" href="{{ route('roles.index') }}"> Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.update', $role->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            {!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'put']) !!}
                            @include('role.form')
                            {!! Form::close() !!}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('adminlte::page')

@section('title', 'Ver Rol')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Detalle del Rol {{$role->name}}</h1></div>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{$role->name}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>
                        @foreach ($permissions as $permission)
                        <div class="form-group">
                            <label>
                                {{ $permission->description }}
                            </label>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

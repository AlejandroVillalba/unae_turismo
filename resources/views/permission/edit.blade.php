@extends('adminlte::page')

@section('title', 'Editar Permiso')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Editar Permiso</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-outline card-info">
                    <div class="card-header">
                        <span class="card-title">Actualizar permiso: {{ $permission->name}}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('permissions.update', $permission->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('permission.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

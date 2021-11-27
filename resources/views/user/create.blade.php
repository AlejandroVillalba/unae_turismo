@extends('adminlte::page')

@section('title', 'Crear Usuario')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Crear un nuevo Usuario</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card bg-gradient-navy">
                    <div class="card-header">
                        <span class="card-title">Crear un nuevo Usuario</span>
                        <div class="float-right">
                            <a class="btn btn-block bg-gradient-info btn-sm" href="{{ route('users.index') }}"> Atrás</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('users.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">

                                    @include('user.form')

                                    <h2 class="h5">Lista de roles:</h2>
                                    {!! Form::model($user, ['route' => ['users.store', $user], 'method' => 'POST']) !!}
                                        @foreach ($roles as $role)
                                            <div class="form-group form-check">
                                                <label>
                                                    {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'form-check-input']) !!}
                                                    {{ $role->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                        <div class="float-left">
                                            <button type="submit" class="btn btn-block bg-gradient-info btn-flat">Crear Usuario</button>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
  <a href="{{ route('login') }}" >Iniciar Sesión</a>
  @endunless
@endsection
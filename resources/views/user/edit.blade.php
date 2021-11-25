@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content')
    @if (session('roles'))
    <div class="alert alert-succes">
        <strong>{{ session('roles') }}</strong>
    </div>
        
    @endif
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update User</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    @include('user.form')

                                    <h2 class="h5">Lista de roles:</h2>
                                    {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
                                        @foreach ($roles as $role)
                                            <div class="form-group form-check">
                                                <label>
                                                    {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'form-check-input']) !!}
                                                    {{ $role->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                        <div class="box-footer mt20">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
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

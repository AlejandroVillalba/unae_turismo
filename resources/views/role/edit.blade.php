@extends('adminlte::page')

@section('template_title')
    Update Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Role</span>
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

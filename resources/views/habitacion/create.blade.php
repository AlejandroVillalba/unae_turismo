@extends('adminlte::page')

@section('template_title')
    Create Habitacion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Habitacion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('habitacions.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('habitacion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

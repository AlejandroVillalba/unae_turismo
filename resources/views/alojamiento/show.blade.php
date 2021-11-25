@extends('adminlte::page')
@section('title', 'Alojamiento')

@section('content_header')
{{ $alojamiento->name }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alojamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alojamientos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $alojamiento->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
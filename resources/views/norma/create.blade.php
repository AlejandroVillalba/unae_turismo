@extends('adminlte::page')

@section('title', 'Crear Normas')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Crear una nueva Norma</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear una Norma</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('normas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('norma.form')

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
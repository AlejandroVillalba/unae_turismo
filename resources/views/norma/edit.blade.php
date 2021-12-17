@extends('adminlte::page')

@section('title', 'Editar Norma')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Editar Norma</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Norma</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('normas.update', $norma->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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
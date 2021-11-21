@extends('adminlte::page')
{{-- activa el plugins DateRangePicker solo en esta sección --}}
@section('plugins.DateRangePicker', true) 
@section('title', 'Home')

@section('content_header')
    <h1>Inicio</h1>
@stop 

@section('content')

  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Rango de fechas:</h3>
    </div>
    <div class="form-row">
      <div class="card-body">
        <div class="col-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="far fa-calendar-alt"></i>
              </span>
            </div>
              <input type="text" name="daterange" class="form-control " value="11/19/2021 - 11/20/2021" />
          </div>
        </div>
      </div><!-- /.card-body -->
    </div><!-- /.form row -->
    <div class="card-footer">
      The footer of the card
    </div>
  </div>

@stop

@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión. <a href="{{ route('login') }}" >Iniciar Sesión</a> @endunless
@endsection

@section('css')
  
@stop

@section('js')
  <script>
      $(function() {
        $('input[name="daterange"]').daterangepicker({
          opens: 'center'
        }, function(start, end, label) {
          console.log("Se realizó una nueva selección de fecha.: " + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY'));
        });
      });
  </script>
@stop
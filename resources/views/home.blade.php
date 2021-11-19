@extends('adminlte::page')
{{-- activa el plugins DateRangePicker solo en esta sección --}}
@section('plugins.DateRangePicker', true) 
@section('title', 'Home')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
    <p>vista de inicio</p>
    <div class="form-group">
        <label>Rango de fechas:</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="far fa-calendar-alt"></i>
            </span>
          </div>
          <input type="text" name="daterange" class="form-control float-right" value="11/19/2021 - 11/20/2021" />
        </div>
    </div>

@stop

@section('footer')
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
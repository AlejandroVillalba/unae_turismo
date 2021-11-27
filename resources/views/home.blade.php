@extends('adminlte::page')
{{-- activa el plugins DateRangePicker solo en esta sección --}}
  @section('plugins.DateRangePicker', true) 

@section('title', 'Inicio')

@section('content_header')
<div class="shadow p-3 mb-5 bg-white rounded"><h1>Inicio</h1></div>

@stop 

@section('content')

  <div class="card bg-dark text-white">
    <img src="http://3.bp.blogspot.com/--QsqSRaBcFE/UNqBXF_SENI/AAAAAAAABZU/kZgcV-vnnBs/s1600/2.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class=""><strong>Encontrá ofertas en hoteles, casas y mucho más</strong></h5>
      <p class="card-text">Desde cómodas casas de campo hasta departamentos con onda en la ciudad</p>

      <div class="form-row">
          {{-- calendario de rango --}}
          <div class="col-sm-3 my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                  <div class="input-group-text bg-gradient-info">
                  <i class="far fa-calendar-alt"></i>
                  </div>
              </div>
                <input type="text" name="daterange" class="form-control " value="" />
            </div>
          </div>
          {{-- /calendario --}}

          <div class="col-sm-3 my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-bed"></i>
                </span>
              </div>
                <select class="form-control">
                  <option selected>Habitaciones</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
            </div>
          </div>

          <div class="col-sm-3 my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-user-tie"></i>
                </span>
              </div>
                <select class="form-control">
                  <option selected>Adultos</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
            </div>
          </div>

          <div class="col-sm-3 my-1">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fas fa-baby"></i>
                </span>
              </div>
                <select class="form-control">
                  <option selected>Menores</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
            </div>
          </div>
      </div><!-- /.form row -->
      <button type="button" class="btn btn-block bg-gradient-primary btn-lg">Buscar</button>
    </div>
  </div>
  
@stop

@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
  <a href="{{ route('login') }}" >Iniciar Sesión</a>
  @endunless
@endsection

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
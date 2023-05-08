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
          <button type="button" class="btn btn-block bg-gradient-primary btn-lg">Buscar</button>
      </div><!-- /.form row -->
    </div>
  </div>

    <h1>Mostras ofertas</h1>
    
  @foreach ($alojamientos as $alojamiento)
  <div class="card" style="width: 18rem;">
    
    <img class="card-img-top" src="{{$alojamiento->imagenes}}" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $alojamiento->nombre }}</h5>
      <p class="card-text">{{ $alojamiento->descripcion }}</p>
      <blockquote class="blockquote mb-2">
      <footer class="blockquote-footer">Publicado por: <cite title="Source Title">{{ implode(', ', $alojamiento->user()->get()->pluck('name')->toArray()) }}</cite></footer>
    </blockquote>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Categoria: {{  implode(', ', $alojamiento->categoriaAlojamiento()->get()->pluck('nombre')->toArray())  }}</li>
      <li class="list-group-item">Direccion: {{ $alojamiento->direccion }}</li>
      <li class="list-group-item">Telefono: {{ $alojamiento->telefono }}</li>
    </ul>

  </div>
 
  @endforeach
  <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link"><span aria-hidden="true">&laquo;</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a>
    </li>
  </ul>
</nav>
@stop

@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
    <div  class="btn-group" role="group">
      <button type="button" class="btn btn-link"><a href="{{ route('login') }}">Iniciar Sesión</a></button>
      <button type="button" class="btn btn-link"><a href="{{ route('register') }}" class="btn-group">Registrarse</a></button>
    </div>
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
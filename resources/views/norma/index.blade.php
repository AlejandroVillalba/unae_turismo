@extends('adminlte::page')

@section('title', 'Normas')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Normas de las habitaciones</h1></div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Norma') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('normas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
										<th>Nombre</th>
										<th>Ingreso</th>
										<th>Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($normas as $norma)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $norma->nombre }}</td>
											<td>{{ $norma->ingreso }}</td>
											<td>{{ $norma->salida }}</td>

                                            <td>
                                                <form action="{{ route('normas.destroy',$norma->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('normas.show',$norma->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('normas.edit',$norma->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $normas->links() !!}
            </div>
        </div>
    </div>
@endsection
@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
  <a href="{{ route('login') }}" >Iniciar Sesión</a>
  @endunless
@endsection

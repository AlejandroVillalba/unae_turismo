@extends('adminlte::page')

@section('title', 'Detalle Habitacion')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Crear un nuevo Detalle Habitacion</h1></div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle Habitacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalle-habitacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cama</th>
										<th>Cantidadcama</th>
										<th>Cantidadpersona</th>
										<th>Dimension</th>
										<th>Banos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalleHabitacions as $detalleHabitacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalleHabitacion->cama }}</td>
											<td>{{ $detalleHabitacion->cantidadCama }}</td>
											<td>{{ $detalleHabitacion->cantidadPersona }}</td>
											<td>{{ $detalleHabitacion->dimension }}</td>
											<td>{{ $detalleHabitacion->banos }}</td>

                                            <td>
                                                <form action="{{ route('detalle-habitacions.destroy',$detalleHabitacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalle-habitacions.show',$detalleHabitacion->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalle-habitacions.edit',$detalleHabitacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $detalleHabitacions->links() !!}
            </div>
        </div>
    </div>
@endsection

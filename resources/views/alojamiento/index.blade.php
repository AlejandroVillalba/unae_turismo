@extends('adminlte::page')

@section('title', 'Alojamientos')

@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Alojamientos</h1></div>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                             <div class="float-right">
                                <a href="{{ route('alojamientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre del Alojamiento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alojamientos as $alojamiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $alojamiento->name }}</td>

                                            <td>
                                                <form action="{{ route('alojamientos.destroy',$alojamiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alojamientos.show',$alojamiento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alojamientos.edit',$alojamiento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $alojamientos->links() !!}
            </div>
        </div>
    </div>
@endsection

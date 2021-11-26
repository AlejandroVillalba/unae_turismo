@extends('adminlte::page')
@section('title', 'Permisos')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Lista de Permisos</h1></div>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-info">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                             <div class="float-right">
                                <a href="{{ route('permissions.create') }}" class="btn btn-block bg-gradient-navy btn-flat"  data-placement="left">
                                  {{ __('Crear nuevo permiso') }}
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
										<th>Nombre del permiso</th>
										<th>Descripción del permiso</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $permission->name }}</td>
											<td>{{ $permission->description }}</td>
                                            <td>
                                                <form action="{{ route('permissions.destroy',$permission->id) }}" method="POST">
                                                    <a class="btn bg-gradient-navy btn-sm" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn bg-gradient-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $permissions->links() !!}
            </div>
        </div>
    </div>
@endsection

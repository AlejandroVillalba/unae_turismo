@extends('adminlte::page')

@section('title', 'Roles')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Lista de Roles</h1></div>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-olive">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                             <div class="float-right">
                                <a href="{{ route('roles.create') }}" class="btn btn-block bg-gradient-info btn-flat"  data-placement="left">
                                  {{ __('Crear un nuevo rol') }}
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
                            <table id="roles" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
										<th>Nombre</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $role->name }}</td>
                                            <td>
                                                <form  action="{{ route('roles.destroy',$role->id) }}" class="formulario-eliminar" method="POST">
                                                    <a class="btn bg-gradient-purple btn-sm" href="{{ route('roles.show',$role->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn bg-gradient-olive btn-sm" href="{{ route('roles.edit',$role->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
@section('js')
    <script> 
    $(document).ready( function () {
        $('#roles').DataTable({
            "language": {
                "search": "Buscar:",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Valor no encontrado - lo siento",
                "info": "Mostrando _PAGE_ de _PAGES_ página",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "first": "Primero",
                    "last": "Último"
                }
            },
            dom: 'lfBrtip', 
            responsive: true,
            autoWidth:false,
            "pagingType": "first_last_numbers",
            buttons:[
                {
                    extend: 'excelHtml5',
                    text:   '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    text:   '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger'
                },
                {
                    extend: 'print',
                    text:   '<i class="fas fa-print"></i>',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-info'
                }
            ]
        });
    });
    </script>
        {{-- alerta de eliminar --}}
        @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'Su archivo ha sido eliminado con exito.'
                )
        </script>
    @endif
    <script> 
        $(document).ready( function () {
            $('.formulario-eliminar').submit(function(e){
                e.preventDefault();
                Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {

                    this.submit();
                }
                })
            })
        });
    </script> 
    {{-- fin alerta de eliminar --}}
@stop
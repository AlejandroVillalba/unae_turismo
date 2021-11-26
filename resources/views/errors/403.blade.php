@extends('adminlte::page')

@section('title', 'Error 403')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Error 403 | No estas autorizado para esta acción</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section> 

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-danger"> 403</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Lo sentimos, acceso denegado.</h3>
          <p>
            Actualmente usted no tiene los permisos para acceder a esta ruta.
            Mientras tanto, puedes <a href=" {{ url('/') }} ">volver al inicio</a>
          </p>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>

@stop
@section('js')
<script>
    Swal.fire({
      icon: 'error',
      title: 'Acceso denegado',
      text: 'No tienes los permisos para acceder a esta ruta!',
})
</script>
@stop
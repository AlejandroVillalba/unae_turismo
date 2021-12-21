@extends('adminlte::page')

@section('plugins.Select2', true) 
@section('title', 'Crear tipo de habitación')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Distribución y precios</h1></div>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                <form method="POST" action="{{ route('habitacions.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">¡Hola! {{ Auth::user()->name }} Seleccione a que tipo de habitación corresponde tu alojamiento</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div><!-- /.card-tools -->
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                {{ Form::label('tipo_habitacions_id', 'Seleccione el tipo de habitación') }}                                    
                                <select class="form-control select2" name="tipo_habitacions_id" style="width: 100%;">
                                    @foreach ($categories as $categorie)
                                        <option value="{{$categorie->id}}" >{{$categorie->nombre}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('tipo_habitacions_id', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('alojamiento_id', 'Seleccione su alojamiento') }}                                    
                                <select class="form-control select2" name="alojamiento_id" style="width: 100%;">
                                    @foreach ($alojamientos as $alojamiento)
                                        <option value="{{$alojamiento->id}}" >{{$alojamiento->nombre}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('alojamiento_id', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                            <!-- detalle de habitacion -->
                    <div class="card card-outline card-olive">
                        <div class="card-header">
                            <h3 class="card-title">Detalle de la habitación</h3>

                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            </div> <!-- /.card-tools -->
                        </div>
                        <div class="card-body">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div class="float-right">
                                   <a href="{{ route('detalle-habitacions.create') }}" class="btn btn-block bg-gradient-purple btn-flat"  data-placement="left">
                                     {{ __('Crear otro detalle') }}
                                   </a>
                                 </div>
                           </div> <br>
                            <div class="form-group">
                                {{ Form::label('detalle_habitacion_id', 'Seleccione el tipo de cama') }}                                    
                                <select class="form-control select2" name="detalle_habitacion_id" style="width: 100%;">
                                    @foreach ($detalleHabitacion as $detalle)
                                        <option value="{{$detalle->id}}" >{{$detalle->cama}}</option>
                                    @endforeach
                                </select>
                                {!! $errors->first('detalle_habitacion_id', '<div class="invalid-feedback">:message</p>') !!}
                            </div>

                        </div>
                    </div>

                    <!-- detalle de habitacion -->
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Caracteristicas de la habitación</h3>
                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            </div> <!-- /.card-tools -->
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                {{ Form::label('nombre', 'Nombre de la Habitación') }}
                                {{ Form::text('nombre', $habitacion->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('precio', 'Precio de la Habitación (por noche)') }}
                                {{ Form::number('precio', $habitacion->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
                                {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('descripcion','Descripción') }}
                                {{ Form::textarea('descripcion', $habitacion->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                {{ Form::label('disponible', 'Disponible') }}
                                {{ Form::text('disponible', $habitacion->disponible, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
                                {!! $errors->first('disponible', '<div class="invalid-feedback">:message</p>') !!}
                            </div>
                    </div>
                    <div class="box-footer mt20">
                        <button type="submit" class="btn btn-block bg-gradient-primary btn-lg">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

 
    })
    </script>
@stop
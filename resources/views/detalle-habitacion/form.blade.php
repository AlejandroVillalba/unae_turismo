<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cama', 'Camas') }}
            {{ Form::text('cama', $detalleHabitacion->cama, ['class' => 'form-control' . ($errors->has('cama') ? ' is-invalid' : ''), 'placeholder' => 'Cama']) }}
            {!! $errors->first('cama', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadCama', 'Cantidad de camas:') }}
            {{ Form::text('cantidadCama', $detalleHabitacion->cantidadCama, ['class' => 'form-control' . ($errors->has('cantidadCama') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadcama']) }}
            {!! $errors->first('cantidadCama', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadPersona', 'Cantidad de personas que pueden estar en la Habitacion:') }}
            {{ Form::text('cantidadPersona', $detalleHabitacion->cantidadPersona, ['class' => 'form-control' . ($errors->has('cantidadPersona') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadpersona']) }}
            {!! $errors->first('cantidadPersona', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dimension', 'Tamaño de la Habitacion (opcional):') }}
            {{ Form::text('dimension', $detalleHabitacion->dimension, ['class' => 'form-control' . ($errors->has('dimension') ? ' is-invalid' : ''), 'placeholder' => 'Dimension']) }}
            {!! $errors->first('dimension', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('banos', 'Baños:') }}
            {{ Form::text('banos', $detalleHabitacion->banos, ['class' => 'form-control' . ($errors->has('banos') ? ' is-invalid' : ''), 'placeholder' => 'Banos']) }}
            {!! $errors->first('banos', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
  <a href="{{ route('login') }}" >Iniciar Sesión</a>
  @endunless
@endsection
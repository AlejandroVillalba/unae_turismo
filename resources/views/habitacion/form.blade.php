<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_habitacions_id') }}
            {{ Form::text('tipo_habitacions_id', $habitacion->tipo_habitacions_id, ['class' => 'form-control' . ($errors->has('tipo_habitacions_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Habitacions Id']) }}
            {!! $errors->first('tipo_habitacions_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alojamiento_id') }}
            {{ Form::text('alojamiento_id', $habitacion->alojamiento_id, ['class' => 'form-control' . ($errors->has('alojamiento_id') ? ' is-invalid' : ''), 'placeholder' => 'Alojamiento Id']) }}
            {!! $errors->first('alojamiento_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle_habitacion_id') }}
            {{ Form::text('detalle_habitacion_id', $habitacion->detalle_habitacion_id, ['class' => 'form-control' . ($errors->has('detalle_habitacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Detalle Habitacion Id']) }}
            {!! $errors->first('detalle_habitacion_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $habitacion->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $habitacion->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $habitacion->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disponible') }}
            {{ Form::text('disponible', $habitacion->disponible, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('disponible', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
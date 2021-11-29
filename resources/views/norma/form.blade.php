<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $norma->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingreso') }}
            {{ Form::text('ingreso', $norma->ingreso, ['class' => 'form-control' . ($errors->has('ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Ingreso']) }}
            {!! $errors->first('ingreso', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salida') }}
            {{ Form::text('salida', $norma->salida, ['class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''), 'placeholder' => 'Salida']) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
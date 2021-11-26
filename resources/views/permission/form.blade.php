<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name', 'Nombre del permiso') }}
            {{ Form::text('name', $permission->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del permiso']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Descripción del permiso') }}
            {{ Form::text('description', $permission->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción del permiso']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    </div>
    <div class="float-left">
        <button type="submit" class="btn btn-block bg-gradient-primary btn-sm">Enviar</button>
    </div>
</div>
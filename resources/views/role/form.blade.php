<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <h2 class="h3">Lista de Permisos:</h2>
       
        @foreach ($permissions as $permission)
            <div class="form-group form-check">
                <label>
                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'form-check-input']) !!}
                    {{ $permission->description }}
                </label>
            </div>
        @endforeach
        {!! Form::close() !!}
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
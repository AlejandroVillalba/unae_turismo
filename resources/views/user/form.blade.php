<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraseña') }}
            {{-- {{ Form::password('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }} --}}
            <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
            {!! $errors->first('password', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <h2 class="h5">Lista de roles:</h2>
        {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'put']) !!}
        @foreach ($roles as $role)
            <div class="form-group form-check">
                <label>
                    {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'form-check-input']) !!}
                    {{ $role->name }}
                </label>
            </div>
        @endforeach
        {!! Form::close() !!}
    

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
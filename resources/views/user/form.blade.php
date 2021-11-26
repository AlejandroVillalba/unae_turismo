 
        <div class="form-group">
            {{ Form::label('name', 'Nombre de usuario') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Nombre de Usuario']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Correo electrónico') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Correo electrónico']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Contraseña') }}
            {{-- {{ Form::password('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }} --}}
            <input type="password" name="password" class="form-control" placeholder="Ingrese la contraseña">
            {!! $errors->first('password', '<div class="invalid-feedback">:message</p>') !!}
        </div>

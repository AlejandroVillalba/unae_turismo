 
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
@section('footer')
    <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
    <div class="float-right d-none d-sm-inline">v1.0</div>
    @unless (Auth::check()) No has iniciado sesión.
    <a href="{{ route('login') }}" >Iniciar Sesión</a>
    @endunless
@endsection
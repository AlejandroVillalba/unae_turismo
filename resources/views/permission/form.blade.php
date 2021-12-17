<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name', 'Nombre del permiso') }}
            {{ Form::text('name', $permission->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Nombre del permiso']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Descripción del permiso') }}
            {{ Form::text('description', $permission->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => ' Ingrese la Descripción del permiso']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>


    </div>
    <div class="float-left">
        <button type="submit" class="btn btn-block bg-gradient-navy btn-flat">Enviar</button>
    </div>
</div>
@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
  <a href="{{ route('login') }}" >Iniciar Sesión</a>
  @endunless
@endsection
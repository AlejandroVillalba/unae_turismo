<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name', 'Nombre del Rol:') }}
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
    <div class="float-left">
        <button type="submit" class="btn btn-block bg-gradient-purple btn-flat">Enviar</button>
    </div>
</div>
@section('footer')
  <strong>Copyright © 2021-2021 <a href="https://www.unae.edu.py/tv/">UNAE</a>.</strong> Reservados todos los derechos.
  <div class="float-right d-none d-sm-inline">v1.0</div>
  @unless (Auth::check()) No has iniciado sesión.
  <a href="{{ route('login') }}" >Iniciar Sesión</a>
  @endunless
@endsection
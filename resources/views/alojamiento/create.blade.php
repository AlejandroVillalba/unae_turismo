@extends('adminlte::page')
{{-- activa el plugins Dropzone solo en esta sección --}}
@section('plugins.Dropzone', true) 
@section('plugins.Select2', true) 
@section('title', 'Crear Alojamiento')
@section('content_header')
    <div class="shadow p-3 mb-5 bg-white rounded"><h1>Cree su Alojamiento</h1></div>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')
                <form method="POST" action="{{ route('alojamientos.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="container-fluid">
                        {{-- Nombre alojamiento --}}
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">¡Hola! {{ Auth::user()->name }} ¿Cómo se llama tu alojamiento?</h3>
                                <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                </div><!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::label('nombre', 'Nombre del alojamiento') }}
                                    {{ Form::text('nombre', $alojamiento->nombre, ['class' => 'form-control form-control-border col-5' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                    <p class="text-muted"><br> Este nombre es el que verán los clientes cuando busquen un lugar para alojarse.</p>
                                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
                                        {{-- slug --}}
                                    <input type="hidden" name="slug" value="slug"> 
                                </div>
                                <div class="form-group">
                                    {{ Form::label('categoria_alojamiento_id', 'Seleccione el tipo de alojamiento') }}                                    
                                    <select class="form-control select2" name="categoria_alojamiento_id" style="width: 100%;">
                                        @foreach ($categories as $categorie)
                                        <option value="{{$categorie->id}}" >{{$categorie->nombre}}</option>
                                        @endforeach
                                    </select>
                                   
                                    {!! $errors->first('categoria_alojamiento_id', '<div class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>

                        {{-- Contacto alojamiento --}}
                        <div class="card card-outline card-olive">
                            <div class="card-header">
                                <h3 class="card-title">¿Cuáles son los datos de contacto del alojamiento?</h3>
                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                </div> <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    {{ Form::label('contacto_nombre', 'Nombre de contacto') }}
                                    {{ Form::text('contacto_nombre', $alojamiento->contacto_nombre, ['class' => 'form-control form-control-border col-5' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
                                </div>
                                <div class="form-group">
                                    <p class="text-muted"><br>Número de teléfono (para ayudar con tu registro si fuese necesario).</p>
                                    {{ Form::label('telefono', 'Número de teléfono') }}
                                    {{ Form::text('telefono', $alojamiento->telefono, ['class' => 'form-control form-control-border col-4' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                                    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
                                </div>
                            </div>
                        </div>

                        {{-- Direccion alojamiento --}}
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">¿Dónde se encuentra tu alojamiento?</h3>
                                <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                </div> <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                                <div class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-info"></i> Tu dirección es importante</h5>
                                    Asegurate de indicar la dirección completa de tu establecimiento. En función de la informacion que nos facilites, puede que te visitemos para verificarla.
                                </div>
                                <div class="form-group">
                                    {{ Form::label('direccion') }}
                                    {{ Form::text('direccion', $alojamiento->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                                    {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('descripcion') }}
                                    {{ Form::textarea('descripcion', $alojamiento->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                                    {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
                                </div>

                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                        <div class="card card-outline card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Fotos del establecimiento</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                </div> <!-- /.card-tools -->
                            </div>
                            <div class="card-body">
                                <div class="callout callout-info">
                                    <h5>Usa fotos de calidad</h5>
                                    <p>Con fotos de calidad, los clientes se hacen una idea real de cómo es el alojamiento. Carga fotos de alta resolución para que vean
                                    todo lo que tu alojamiento les puede ofrecer. Mostraremos estas fotos en la página de tu establecimiento en la web de Unae-Turismo</p>
                                </div>
                                <!-- enviar valor para prueba -->
                                <input type="hidden" name="imagenes" value="https://via.placeholder.com/1280x720.png/00cc">
                            <div id="actions" class="row">
                                <div class="col-lg-6">
                                <div class="btn-group w-100">
                                    <span class="btn btn-success col fileinput-button">
                                    <i class="fas fa-plus"></i>
                                    <span>Añadir fotos</span>
                                    </span>
                                    <button type="submit" class="btn btn-primary col start">
                                    <i class="fas fa-upload"></i>
                                    <span>Enviar los archivos</span>
                                    </button>
                                    <button type="reset" class="btn btn-warning col cancel">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Cancelar la carga</span>
                                    </button>
                                </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                <div class="fileupload-process w-100">
                                    <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="table table-striped files" id="previews">
                                <div id="template" class="row mt-2">
                                <div class="col-auto">
                                    <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                </div>
                                <div class="col d-flex align-items-center">
                                    <p class="mb-0">
                                        <span class="lead" data-dz-name></span>
                                        (<span data-dz-size></span>)
                                    </p>
                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                </div>
                                <div class="col-4 d-flex align-items-center">
                                    <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                    </div>
                                </div>
                                <div class="col-auto d-flex align-items-center">
                                    <div class="btn-group">
                                    <button class="btn btn-primary start">
                                        <i class="fas fa-upload"></i>
                                        <span>Enviar</span>
                                    </button>
                                    <button data-dz-remove class="btn btn-warning cancel">
                                        <i class="fas fa-times-circle"></i>
                                        <span>Cancelar</span>
                                    </button>
                                    <button data-dz-remove class="btn btn-danger delete">
                                        <i class="fas fa-trash"></i>
                                        <span>Borrar</span>
                                    </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="card bg-gradient-warning ">
                                <div class="card-body ">
                                    <div class="h3">¿No tienes fotos profesionales? No te preocupes.</div> 
                                    <li> Puedes utilizar: <i class="fas fa-mobile-alt"></i> Un smartphone  <i class="fas fa-camera"></i> Una cámara digital</li>
                                    <li>¡Recomendación!
                                        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#modal-lg">
                                            ¡A los clientes les encantan las fotos! Aquí tienes algunos consejos para hacer buenas fotos de tu establecimiento
                                        </button>
                                    </li> 
                                    <li>Si no sabes quién hizo la foto, evita usarla. Usa solamente fotos de las que tengas los derechos o si el fotógrafo te ha dado permiso para usarlas.</li>   
                                </div>
                            </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="box-footer mt20">
                            <button type="submit" class="btn btn-block bg-gradient-primary btn-lg">Guardar</button>
                        </div>
                        </div>

                    </div>
                    <!-- /.container -->                    

                </form>
            </div>
        </div>
         <!-- Modal de aviso de fotos consejo -->
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Aquí tienes algunos consejos para hacer buenas fotos de tu establecimiento</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <p class="text-justify">
                        <i class="fas fa-check"></i> <strong> La foto perfecta del establecimiento</strong><br> 
                        La selección de fotos ideal debería mostrar tu establecimiento por dentro y por fuera: salas de estar, dormitorios, baños, jardines, 
                        cocina y servicios como la piscina o el spa. Y si tienes una buena vista desde las ventanas o el balcón, ¡presume de ella!<br>
                        <i class="fas fa-check"></i><strong> Apaisado mejor que vertical</strong><br> 
                        Saca tus fotos en horizontal para abarcar el máximo de espacio en una sola imagen.<br>
                        <i class="fas fa-check"></i><strong> A la luz del día</strong><br>
                        Aprovecha la luz natural para hacer las fotos. Abre las cortinas, enciende todas las luces y que tu alojamiento brille en todo su esplendor.<br>
                        <i class="fas fa-times"></i><strong> Textos y pantallas</strong><br>
                        Por razones de seguridad, comprueba que en tus fotos no aparecen matrículas ni pantallas de TV, ordenadores o portátiles.<br>
                        <i class="fas fa-times"></i><strong> Capturas de pantalla y mapas</strong><br>
                        Nosotros nos encargamos de ofrecerle a tus clientes los mapas y las indicaciones para llegar a tu establecimiento, así no es necesario que añadas capturas de pantalla de los mapas.<br>
                        <i class="fas fa-times"></i><strong> Marcas de agua y logos</strong><br>
                        Evita añadir marcas de agua, puntuaciones o logos en las fotos que no sean de tu establecimiento.<br>
                        <i class="fas fa-times"></i><strong> Tu primera reserva</strong><br>
                        Para que tu establecimiento aparezca online y pueda empezar a recibir reservas desde nuestra página web, tus fotos deben mostrar cómo es tu establecimiento actualmente.<br>
                    </p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
@endsection
@section('js')
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    })
  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Obtenga la plantilla HTML y retírela de la plantilla Doubenthe, HTML y elimínela de la Doubent
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Haz todo el cuerpo una gota de gota.
    url: "/target-url", // Establecer la URL
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Asegúrese de que los archivos no estén en cola hasta que se agregue manualmente
    previewsContainer: "#previews", // Defina el contenedor para mostrar las vistas previas.
    clickable: ".fileinput-button" //Defina el elemento que debe usarse como click activador para seleccionar archivos.
  })

  myDropzone.on("addedfile", function(file) {
    // Conecte el botón de inicio
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Muestra la barra de progreso total cuando comienza la carga.
    document.querySelector("#total-progress").style.opacity = "1"
    // Y deshabilitar el botón de inicio
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Oculta la barra de progreso total cuando ya no se está cargando.
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

// configurar los botones para todas las transferencias
  // El botón "Agregar archivos" no necesita estar configurado porque la configuración
  // `Clickable` ya se ha especificado.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // Dropzonejs código demo final.
    </script>
@stop

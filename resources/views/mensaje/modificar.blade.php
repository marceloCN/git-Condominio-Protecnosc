@extends('layauts.dashboard')

@section('title', 'Modificar Mensaje')

@section('estilo')

    <!-- Bootstrap Material Datetime Picker Css -->
    <link
        href="{{ asset('/DashboardTemplate/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}"
        rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />



@endsection

@section('content')

    <!-- Input -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        FORMULARIO DE MODIFICACION DE UN MENSAJE
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">

                    <form id="sign_in" method="POST" action="{{ route('mensaje.crearModificar') }}">
                        @csrf
                        @method("PUT")
                        <h2 class="card-inside-title">Modificacion de datos de un mensaje</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-4 control-label">Identificador de Mensaje: </label>
                                    <div class="col-sm-6">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="idMensaje"
                                                value="{{ $mensaje->m_id }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="asunto">
                                    <option value="">Tipo de Asunto</option>
                                    <option value="reclamo">RECLAMO</option>
                                    <option value="sugerencia">SUGERENCIA</option>
                                    <option value="personal">PERSONAL</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="estado">
                                    <option value="">Estado</option>
                                    <option value="curso">EL CURSO</option>
                                    <option value="enviado">ENVIAR MENSAJE</option>
                                </select>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    @error('body')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="body" class="form-control"
                                            value="{{ $mensaje->m_body }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                @if ($errors->any())
                                    {{ $errors->first() }}
                                @endif

                                {{-- si fue correcto mostrara el mensaje --}}
                                @if (session('mensaje'))
                                    {{ session('mensaje') }}
                                @endif

                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Modificar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layauts.vistas',['pagina'=>'mensaje.modificar'])

@endsection

@section('script')

    <!-- Autosize Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/autosize/autosize.js') }}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/momentjs/moment.js') }}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script
        src="{{ asset('/DashboardTemplate/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
    </script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/DashboardTemplate/js/pages/forms/basic-form-elements.js') }}"></script>

@endsection

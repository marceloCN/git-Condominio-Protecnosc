@extends('layauts.dashboard')

@section('title', 'Registro de usuario')

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
                        FORMULARIO DE REGISTRO DE USUARIO
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">

                    <form id="sign_in" method="POST" action="{{ route('usuario.CrearRegistro') }}">
                        @csrf
                        <h2 class="card-inside-title">Nuevo Login de Acceso</h2>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            @error('username')
                                <small>*{{ $message }}</small>
                            @enderror
                            <div class="form-line">
                                <input type="email" class="form-control" name="username" value="{{ old('username') }}"
                                    placeholder="Introduce un nuevo correo de acceso" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            @error('password')
                                <small>*{{ $message }}</small>
                            @enderror
                            <div class="form-line">
                                <input type="password" class="form-control" name="password"
                                    value="{{ old('password') }}" placeholder="Introduce tu password Password" required>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="tipo">
                                    <option value="">Introduce tu nuevo tipo de usuario</option>
                                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                    <option value="COMITE">COMITE</option>
                                    <option value="PROPIETARIO">PROPIETARIO</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control show-tick" name="cargo">
                                    <option value="">Introduce tu nuevo cargo (por defecto ninguno)</option>
                                    <option value="DUEÑO">DUEÑO</option>
                                    <option value="INQUILINO">INQUILINO</option>
                                </select>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="input-group date" id="bs_datepicker_component_container">
                                    @error('fecha')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fecha" value="{{ old('fecha') }}"
                                            placeholder="Introducir su tiempo de fecha de acceso al sistema..." required>
                                    </div>
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">


                            </div>
                        </div>



                        <h2 class="card-inside-title">Registro de datos personales</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('nombre')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="nombre" class="form-control"
                                            value="{{ old('nombre') }}" placeholder="Introduce tu nombre" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('apellido')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="apellido" class="form-control"
                                            value="{{ old('apellido') }}" placeholder="Introduce tu apellido" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    @error('ci')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="ci" class="form-control" value="{{ old('ci') }}"
                                            placeholder="Introduce tu carnet" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    @error('telefono')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="telefono" class="form-control"
                                            value="{{ old('telefono') }}" placeholder="Introduce tu telefono" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    @error('ocupacion')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="ocupacion" class="form-control"
                                            value="{{ old('ocupacion') }}" placeholder="Introduce tu ocupacion" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="sexo">
                                    <option value="">Introduce tu Sexo</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('correo')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="correo"
                                            value="{{ old('correo') }}" placeholder="Introduce tu correo Personal"
                                            required autofocus>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                @if ($errors->any())
                                    {{ $errors->first() }}
                                @endif

                                @if (session('mensaje'))
                                    {{ session('mensaje') }}
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'usuario.registrar'])

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

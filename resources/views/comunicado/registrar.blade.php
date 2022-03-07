@extends('layauts.dashboard')

@section('title', 'Registro de comunicado')

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
                        FORMULARIO DE REGISTRO DE UN COMUNICADO
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">
                    <form id="sign_in" method="POST" action="{{ route('comunicado.CrearRegistro') }}">
                        @csrf
                        <h2 class="card-inside-title">Registro de datos de un nuevo comunicado</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="input-group date" id="bs_datepicker_component_container">
                                    @error('fecha')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fecha" value="{{ old('fecha') }}"
                                            placeholder="Introducir la fecha de Comunicado..." required>
                                    </div>
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('hora')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="hora" class="form-control"
                                            value="{{ old('hora') }}"
                                            placeholder="Introduce tu hora de inicio del comunicado, formato => 'hhmm (12:30)'"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('nro')
                                        <small>*{{ $asunto }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="asunto" class="form-control"
                                            value="{{ old('asunto') }}" placeholder="Describe el asunto ..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="tipo">
                                    <option value="">Tipo de comunicado</option>
                                    <option value="reunion">REUNION</option>
                                    <option value="actividad">ACTIVIDAD</option>
                                    <option value="recomendacion">RECOMENDACION</option>
                                    <option value="otro">OTRO</option>
                                </select>
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
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'comunicado.registrar'])

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

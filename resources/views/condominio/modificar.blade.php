@extends('layauts.dashboard')

@section('title', 'Modificar Condominio')

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
                        FORMULARIO DE MODIFICACION DE UN NUEVO CONDOMINIO
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">

                    <form id="sign_in" method="POST" action="{{ route('condominio.crearModificar') }}">
                        @csrf
                        @method("PUT")
                        <h2 class="card-inside-title">Registro de datos del nuevo condominio</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    @error('IdCondominio')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="IdCondominio" class="form-control"
                                            value="{{ $condominio->con_id }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('nombre')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="nombre" class="form-control"
                                            value="{{ $condominio->con_nom }}"
                                            placeholder="Introduce el nombre del condominio" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('ubicacion')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="ubicacion" class="form-control"
                                            value="{{ $condominio->con_ubic }}"
                                            placeholder="Introduce la ubicacion del condominio" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('datos_ubic')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="datos_ubic" class="form-control"
                                            value="{{ $condominio->con_datosub }}"
                                            placeholder="Introduce datos mas especificos de la ubicacion del condominio"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('dimension')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="dimension" class="form-control"
                                            value="{{ $condominio->con_dimension }}"
                                            placeholder="Introduce la dimension que tiene el condominio + hect..." required>
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
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Modificar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layauts.vistas',['pagina'=>'condominio.modificar'])

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

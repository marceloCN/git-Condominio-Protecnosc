@extends('layauts.dashboard')

@section('title', 'Modificar Servicio')

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
                        FORMULARIO DE MODIFICACION DE SERVICIO
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">

                    <form id="sign_in" method="POST" action="{{ route('servicio.crearModificar') }}">
                        @csrf
                        @method("PUT")
                        <h2 class="card-inside-title">Modificar un servicio publico</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-4 control-label">Identificador del Servicio Publico: </label>
                                    <div class="col-sm-6">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="idsp"
                                                value="{{ $servicio_publico->sp_id }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('nombre')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="nombre" class="form-control" step="any"
                                            value="{{ $servicio_publico->sp_nom }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('monto')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="number" name="monto" class="form-control"
                                            value="{{ $servicio_publico->sp_monto }}" placeholder="Introduce el monto del servicio" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="input-group date" id="bs_datepicker_component_container">
                                    @error('fechaini')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fechaini" value="{{ $servicio_publico->sp_fini }}"
                                            placeholder="Introducir su tiempo de fecha de inicio..." required>
                                    </div>
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group date" id="bs_datepicker_component_container">
                                    @error('fechafin')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="fechafin" value="{{ $servicio_publico->sp_ffin }}"
                                            placeholder="Introducir su tiempo de fecha a terminar..." required>
                                    </div>
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
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

    @include('layauts.vistas',['pagina'=>'servicio.Modificar'])

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

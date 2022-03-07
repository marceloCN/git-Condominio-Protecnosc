@extends('layauts.dashboard')

@section('title', 'Registro de reserva')

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
                        FORMULARIO DE REGISTRO DE UNA RESERVA
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">

                    <form id="sign_in" method="POST" action="{{ route('reserva.CrearRegistro') }}">
                        @csrf
                        <h2 class="card-inside-title">Registro de datos para una reserva</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="id_manzana">
                                    <option value="">Introduce el Area Urbana a agregar</option>
                                    @foreach ($manzanas as $manzana)
                                        <option value="{{ $manzana->ma_id }}">Condominio:
                                            {{ $manzana->con_nom }}, Area: {{ $manzana->ma_tipo }}, Dimension: {{ $manzana->ma_dimension }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group date" id="bs_datepicker_component_container">
                                    @error('fecha')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fecha" value="{{ old('fecha') }}"
                                            placeholder="Introducir la fecha de reserva..." required>
                                    </div>
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('horaini')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="horaini" class="form-control"
                                            value="{{ old('horaini') }}" placeholder="Introduce tu hora de inicio, formato 'hhmm (12:30)'" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('horafin')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="horafin" class="form-control"
                                            value="{{ old('horafin') }}" placeholder="Introduce tu hora fin, formato 'hhmm (13:30)'" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('nro')
                                        <small>*{{ $acontecimiento }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="acontecimiento" class="form-control" value="{{ old('acontecimiento') }}"
                                            placeholder="Describe el acontecimiento de dicha reserva..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('nro')
                                        <small>*{{ $descripcion }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="descripcion" class="form-control" value="{{ old('descripcion') }}"
                                            placeholder="Introduce una pequeña Descripcion de dicha reserva..." required>
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
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Registrar Reserva</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'reserva.registrar'])

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

@extends('layauts.dashboard')

@section('title', 'Registro de Casa')

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
                        FORMULARIO DE REGISTRO DE UNA CASA EN UN AREA COMUN
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">
                    {{-- {{ route('reserva.CrearRegistro') }} --}}
                    <form id="sign_in" method="POST" action="{{ route('casa.CrearRegistro') }}">
                        @csrf
                        <h2 class="card-inside-title">Registro de datos de una nueva casa en area comun</h2>
                        <div class="row clearfix">
                            <div class="col-sm-8">
                                <select class="form-control show-tick" required name="id_manzana">
                                    <option value="">Introduce la Ubicacion de la casa a agregar..</option>
                                    @foreach ($manzanas as $manzana)
                                        <option value="{{ $manzana->ma_id }}">Condominio:
                                            {{ $manzana->condominio->con_nom }}, Numero Area tipo urbano: {{ $manzana->ma_nro }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    @error('nro')
                                        <small>*{{ $nro }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="number" name="nro" class="form-control" value="{{ old('nro') }}"
                                            placeholder="Introducir el nro de casa..." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    @error('dimension')
                                        <small>*{{ $dimension }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="dimension" class="form-control" value="{{ old('dimension') }}"
                                            placeholder="Describe la dimension de la casa ej: 30x30mts ..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                @if ($errors->any())
                                    {{ $errors->first() }}
                                @endif

                                {{-- si fue correcto mostrara el mensaje --}}
                                @if (session('mensaje'))
                                    {{ session('mensaje') }}
                                @endif

                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Registrar casa</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'Casa.registrar'])

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

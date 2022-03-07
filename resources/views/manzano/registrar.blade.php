@extends('layauts.dashboard')

@section('title', 'Registro de Area Comun')

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
                        FORMULARIO DE REGISTRO DE UN AREA COMUN
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">

                    <form id="sign_in" method="POST" action="{{ route('manzana.CrearRegistro') }}">
                        @csrf
                        <h2 class="card-inside-title">Registro de datos de una nueva area comun</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="tipo">
                                    <option value="">Introduce el tipo de area comun</option>
                                    <option value="urbano">URBANO</option>
                                    <option value="rural">RURAL</option>
                                    <option value="parque">PARQUE</option>
                                    <option value="area verde">AREA VERDE</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('dimension')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="dimension" class="form-control"
                                            value="{{ old('dimension') }}"
                                            placeholder="Introduce la dimension que tiene el area comun ej: 200x200..." required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('nro')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="number" name="nro" class="form-control" value="{{ old('nro') }}"
                                            placeholder="Introduce el nro del area comun..." required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="id_condominio">
                                    <option value="">Introduce el nombre del condominio para agregarlo</option>
                                    @foreach ($condominios as $condominio)
                                        <option value="{{ $condominio->con_id }}">{{ $condominio->con_nom }}</option>
                                    @endforeach
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

    @include('layauts.vistas',['pagina'=>'area-comun.registrar'])

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

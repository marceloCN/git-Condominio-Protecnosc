@extends('layauts.dashboard')

@section('title', 'Pago de Servicio')

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
                        FORMULARIO DE PAGO DE SERVICIO
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">

                    <form id="sign_in" method="POST" action="{{route('pagar.servicio') }}">
                        @csrf
                        <h2 class="card-inside-title">Registrar de pago de Servicio</h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    @error('numero')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="number" name="numero" class="form-control" step="any"
                                            value="{{ old('numero') }}" placeholder="Numero de Tarjeta*" minlength="16" maxlength="16" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('caducidad')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="caducidad" class="form-control"
                                            value="{{ old('caducidad') }}" placeholder="caducidad*" minlength="5" maxlength="5" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('cvv')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="cvv" class="form-control" value="{{ old('cvv') }}"
                                            placeholder="CVV*" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <label for="NameSurname" class="col-sm-2">Identificador:</label>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    @error('idServicio')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="number" name="idServicio" class="form-control"
                                            value="{{ $servicio->s_id }}" required>
                                    </div>
                                </div>
                            </div>
                            <label for="NameSurname" class="col-sm-1 control-label">Monto:</label>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    @error('monto')
                                        <small>*{{ $message }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="monto" class="form-control"
                                            value="{{ $servicio->s_monto }}" required>
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
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Pagar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'pagar.servicio'])

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

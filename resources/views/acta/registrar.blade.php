@extends('layauts.dashboard')

@section('title', 'Registro de acta')

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
                        FORMULARIO DE REGISTRO DE ACTA
                        <small>por favor introducir todos los datos</small>
                    </h2>

                </div>

                <div class="body">
                    {{-- {{ route('reserva.CrearRegistro') }} --}}
                    <form id="sign_in" method="POST" action="{{ route('acta.CrearRegistro') }}">
                        @csrf
                        <h2 class="card-inside-title">Registro de datos de acta</h2>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="id_comunicado">
                                    <option value="">Introduce el comunicado que pertenece..</option>
                                    @foreach ($comunicados as $comunicado)
                                        <option value="{{ $comunicado->c_id }}">Asunto: {{ $comunicado->c_asunto }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control show-tick" required name="tipo">
                                    <option value="">Introduce el tipo de acta..</option>
                                    <option value="descriptiva">DESCRIPTIVA</option>
                                    <option value="informativa">INFORMATIVA</option>
                                </select>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('responsable')
                                        <small>*{{ $responsable }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="responsable" class="form-control"
                                            value="{{ old('responsable') }}" placeholder="Persona responsable ..."
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    @error('accion')
                                        <small>*{{ $accion }}</small>
                                    @enderror
                                    <div class="form-line">
                                        <input type="text" name="accion" class="form-control"
                                            value="{{ old('accion') }}" placeholder="accion ..." required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        @error('conclusion')
                                            <small>*{{ $conclusion }}</small>
                                        @enderror
                                        <textarea rows="4" class="form-control no-resize" name="conclusion" 
                                        value="{{ old('conclusion') }}" placeholder="Describe una conclusion..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
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
                                <button class="btn btn-block bg-pink waves-effect" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'acta.registrar'])

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

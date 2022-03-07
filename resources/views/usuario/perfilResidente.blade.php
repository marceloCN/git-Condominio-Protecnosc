@extends('layauts.dashboard')

@section('title', 'Perfil Residente')

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

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"
        rel="stylesheet">

@endsection

@section('content')

    <div class="row clearfix">
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        @if ($usuario->u_sex == 'M')
                            <img src="{{ asset('/DashboardTemplate/images/men.jpg') }}" alt="AdminBSB - Profile Image" />
                        @else
                            <img src="{{ asset('/DashboardTemplate/images/women.jpg') }}"
                                alt="AdminBSB - Profile Image" />
                        @endif

                    </div>
                    <div class="content-area">
                        <h3>{{ $usuario->u_nom }}
                            {{ $usuario->u_app }}</h3>
                        <p>{{ $usuario->rol->r_tipo }}</p>
                        @if ($usuario->rol->r_cargo != null)
                            <p>{{ $usuario->rol->r_cargo }}</p>
                        @endif


                    </div>
                </div>
                <div class="profile-footer">
                    <ul>
                        <li>
                            <span>Inicio:</span>
                            <span>{{ $usuario->rol->r_fechaini }}</span>
                        </li>
                        <li>
                            <span>Finaliza</span>
                            @if ($usuario->rol->r_fechafin != null)
                                <span>{{ $usuario->rol->r_fechafin }}</span>
                            @else
                                <span>Por siempre</span>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card card-about-me">
                <div class="header">
                    <h2>Acerca de mi</h2>
                </div>
                <div class="body">
                    <ul>
                        <li>
                            <div class="title">
                                <i class="material-icons">call</i>
                                Telefono
                            </div>
                            <div class="content">
                                {{ $usuario->u_telf }}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">person</i>
                                Cedula de Identidad
                            </div>
                            <div class="content">
                                {{ $usuario->u_ci }}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">email</i>
                                Correo electronico
                            </div>
                            <div class="content">
                                {{ $usuario->u_email }}
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">edit</i>
                                Sexo
                            </div>
                            <div class="content">
                                @if ($usuario->u_sex == 'M')
                                    Masculino
                                @else
                                    Femenino
                                @endif
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">notes</i>
                                Ocupacion
                            </div>
                            <div class="content">
                                {{ $usuario->u_ocupacion }}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                    data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab"
                                    data-toggle="tab">Editar Perfil</a></li>
                            <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab"
                                    data-toggle="tab">Cambiar Contraseña</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <div class="header">
                                    <h2>MEJORES LUGARES DEL CONDOMINIO</h2>
                                </div>
                                <div class="body">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img
                                                    src="{{ asset('/DashboardTemplate/images/image-gallery/11.jpg') }}" />
                                            </div>
                                            <div class="item">
                                                <img
                                                    src="{{ asset('/DashboardTemplate/images/image-gallery/12.jpg') }}" />
                                            </div>
                                            <div class="item">
                                                <img
                                                    src="{{ asset('/DashboardTemplate/images/image-gallery/19.jpg') }}" />
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                                            data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                                            data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                                <form class="form-horizontal" action="{{ route('usuario.editarResidente') }}" method="POST">
                                    @csrf
                                    @method("PUT")

                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Identificador de usuario</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="idUser"
                                                    value="{{ $usuario->u_id }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Nombre</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="nombre"
                                                    value="{{ $usuario->u_nom }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Apellido</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="apellido"
                                                    value="{{ $usuario->u_app }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Cedula de
                                            Indentidad</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="ci"
                                                    value="{{ $usuario->u_ci }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Telefono</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="telefono"
                                                    value="{{ $usuario->u_telf }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Email" class="col-sm-2 control-label">Correo Personal</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="email" class="form-control" id="Email" name="correo"
                                                    placeholder="Email" value="{{ $usuario->u_email }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Ocupacion</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="ocupacion"
                                                    value="{{ $usuario->u_ocupacion }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">
                                            Modificar:
                                        </label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-danger">Modificar</button>
                                            <br>
                                            @if (session('mensaje'))
                                                {{ session('mensaje') }}
                                            @endif
                                        </div>
                                    </div>

                                </form>
                            </div>


                            <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                <form class="form-horizontal" action="{{ route('acceso.editarResidente') }}" method="POST">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-4 control-label">Identificador de usuario</label>
                                        <div class="col-sm-6">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="NameSurname" name="idUser"
                                                    value="{{ $usuario->u_id }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="OldPassword" class="col-sm-3 control-label">Correo de acceso</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="email" class="form-control" id="OldPassword" name="acceso"
                                                    value="{{ $usuario->acceso->a_acc }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="OldPassword" class="col-sm-3 control-label">Antigua Contraseña</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="OldPassword"
                                                    name="OldPassword"
                                                    value="{{ $usuario->acceso->a_pass }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPassword" class="col-sm-3 control-label">Nueva Contraseña</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="NewPassword"
                                                    name="NewPassword" placeholder="Introduce tu nueva contraseña" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="NewPasswordConfirm" class="col-sm-3 control-label">Nueva Contraseña
                                            (Confirmar)</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="NewPasswordConfirm"
                                                    name="NewPasswordConfirm"
                                                    placeholder="Vuelve a introducir tu nueva contraseña" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-danger">MODIFICAR EL ACCESO</button>
                                            <br>
                                            @if (session('sms'))
                                                {{ session('sms') }}
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
            @include('layauts.vistas',['pagina'=>'usuario.perfil'])
        </div>
    </div>





@endsection

@section('script')

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}">
    </script>
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}">
    </script>
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src=".{{ asset('/DashboardTemplate/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}">
    </script>
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}">
        <!-- Autosize Plugin Js 
        -->
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
    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <script src="{{ asset('/DashboardTemplate/js/pages/examples/profile.js') }}"></script>
@endsection 

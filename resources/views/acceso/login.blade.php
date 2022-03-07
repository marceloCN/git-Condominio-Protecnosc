<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/DashboardTemplate/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('/DashboardTemplate/css/style.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Condominio <b>PROTECNOSC</b></a>
            {{-- <small>Admin BootStrap Based - Material Design</small> --}}
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('usuario.ingresar') }}">
                    @csrf
                    <h1>
                        <div class="msg">Inicio de Seccion</div>
                    </h1>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="username" placeholder="correo de acceso"
                                required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required>
                        </div>
                    </div>

                    

                    <div class="row">

                        <div class="col-xs-8 p-t-5">
                            <a href="{{ route('inicio') }}">Volver al inicio</a>
                            @if ($errors->any())
                                <br>
                                {{ $errors->first() }}
                            @endif
                        </div>

                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Ingresar</button>
                        </div>
                    </div>

                    
                    @if (session('mensaje'))
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">public</i>
                            </span>
                            <div class="form-line">
                                {{ session('mensaje') }}
                            </div>
                        </div>
                    @endif

                </form>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'login.ingresar'])

    <!-- Jquery Core Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/node-waves/waves.js') }}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/DashboardTemplate/js/admin.js') }}"></script>
    <script src="{{ asset('/DashboardTemplate/js/pages/examples/sign-in.js') }}"></script>
</body>

</html>

@extends('layauts.dashboard')

@section('title', 'Listar Usuarios')

@section('estilo')

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"
        rel="stylesheet">

    <!-- Sweetalert Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

@endsection

@section('content')

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        LISTADO DE TODOS LOS USUARIOS
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>CI</th>
                                    <th>Sexo</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Ocupacion</th>
                                    @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                        <th>Opciones</th>
                                    @endif
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>CI</th>
                                    <th>Sexo</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Ocupacion</th>
                                    @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                        <th>Opciones</th>
                                    @endif
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->u_id }}</td>
                                        <td>{{ $usuario->u_nom }}</td>
                                        <td>{{ $usuario->u_app }}</td>
                                        <td>{{ $usuario->u_ci }}</td>
                                        <td>{{ $usuario->u_sex }}</td>
                                        <td>{{ $usuario->u_telf }}</td>
                                        <td>{{ $usuario->u_email }}</td>
                                        <td>{{ $usuario->u_ocupacion }}</td>
                                        @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                            <td>
                                                <a href="{{ route('usuario.modificarResidente', $usuario->u_id) }}">Modificar</a>
                                                <br>
                                                @if (auth()->user()->usuario->u_id != $usuario->u_id)
                                                    <a role="button" href="#" class="btn btn-link" data-toggle="modal"
                                                        data-target="#modalEliminarUsuario-{{ $usuario->u_id }}">
                                                        Eliminar
                                                    </a>
                                                @endif
                                                <br>
                                            </td>
                                            @include('usuario.modal_eliminar', $usuario)
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session('mensaje'))
        {{ session('mensaje') }}
    @endif
    @include('layauts.vistas',['pagina'=>'usuario.listar'])

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
    </script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/node-waves/waves.js') }}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{ asset('/DashboardTemplate/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/DashboardTemplate/js/admin.js') }}"></script>
    <script src="{{ asset('/DashboardTemplate/js/pages/ui/dialogs.js') }}"></script>


    <!-- Custom Js -->

    <script src="{{ asset('/DashboardTemplate/js/pages/tables/jquery-datatable.js') }}"></script>


@endsection

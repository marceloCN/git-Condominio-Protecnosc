@extends('layauts.dashboard')

@section('title', 'Listar Acceso')

@section('estilo')

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('/DashboardTemplate/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}"
        rel="stylesheet">

@endsection

@section('content')

    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        LISTADO DE TODOS LOS CONDOMINIOS REGISTRADOS
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Ubicacion</th>
                                    <th>Datos UV</th>
                                    <th>Dimension</th>
                                    @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                        <th>Opciones</th>
                                    @endif
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Ubicacion</th>
                                    <th>Datos UV</th>
                                    <th>Dimension</th>
                                    @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                        <th>Opciones</th>
                                    @endif
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($condominios as $condominio)
                                    <tr>
                                        <td>{{ $condominio->con_id }}</td>
                                        <td>{{ $condominio->con_nom }}</td>
                                        <td>{{ $condominio->con_ubic }}</td>
                                        <td>{{ $condominio->con_datosub }}</td>
                                        <td>{{ $condominio->con_dimension }}</td>
                                        @if (auth()->user()->usuario->rol->r_tipo == 'ADMINISTRADOR')
                                            <td>
                                                <a href="{{ route('condominio.modificar', $condominio->con_id) }}">Modificar</a>
                                                <br>
                                                <a role="button" href="#" class="btn btn-link" data-toggle="modal"
                                                    data-target="#modalEliminarCondominio-{{ $condominio->con_id }}">
                                                    Eliminar
                                                </a>
                                                <br>
                                            </td>
                                            @include('condominio.modal_eliminar', $condominio)
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
    @include('layauts.vistas',['pagina'=>'condominio.listar'])

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

    <!-- Custom Js -->

    <script src="{{ asset('/DashboardTemplate/js/pages/tables/jquery-datatable.js') }}"></script>


@endsection

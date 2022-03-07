@extends('layauts.dashboard')

@section('title', 'Listar todos los servicios')

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
                        LISTADO DE TODOS LOS SERVICIOS
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Monto</th>
                                    <th>FechaInicio</th>
                                    <th>FechaFin</th>
                                    <th>Usuario que registro?</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Monto</th>
                                    <th>FechaInicio</th>
                                    <th>FechaFin</th>
                                    <th>Usuario que registro?</th>
                                    <th>Opciones</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($servicio_publicos as $servicio_publico)
                                    <tr>
                                        <td>{{ $servicio_publico->sp_id }}</td>
                                        <td>{{ $servicio_publico->sp_nom }}</td>
                                        <td>{{ $servicio_publico->sp_monto }}</td>
                                        <td>{{ $servicio_publico->sp_fini }}</td>
                                        <td>{{ $servicio_publico->sp_ffin }}</td>
                                        <td>{{ $servicio_publico->usuario->u_nom }} {{ $servicio_publico->usuario->u_app }}</td>
                                        <td>
                                            <a href="{{ route('servicio.modificar', $servicio_publico->sp_id) }}">Modificar</a>
                                            <br>
                                            
                                            <a role="button" href="#" class="btn btn-link" data-toggle="modal"
                                                data-target="#modalEliminarServicio-{{ $servicio_publico->sp_id }}">
                                                Eliminar
                                            </a> 
                                            <br>
                                        </td>
                                        @include('servicio.modal_eliminar', $servicio_publico)
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
    @include('layauts.vistas',['pagina'=>'servicio.listar'])

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

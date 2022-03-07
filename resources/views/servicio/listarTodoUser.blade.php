@extends('layauts.dashboard')

@section('title', 'Listar todos los servicios del usuario')

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
                        LISTADO DE TODOS TUS SERVICIOS
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre Servicio</th>
                                    <th>Monto</th>
                                    <th>Fecha</th>
                                    <th>Esta Pagado?</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre Servicio</th>
                                    <th>Monto</th>
                                    <th>Fecha</th>
                                    <th>Esta Pagado?</th>
                                    <th>Opciones</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($servicio_publicos as $servicio_publico)
                                    <tr>
                                        <td>{{ $servicio_publico->s_id }}</td>
                                        <td>{{ $servicio_publico->sp_nom }}</td>
                                        <td>{{ $servicio_publico->s_monto }}</td>
                                        <td>{{ $servicio_publico->s_fecha }}</td>
                                        @if ($servicio_publico->id_notaventa == null)
                                            <td>En mora</td>
                                        @else
                                            <td>Pagado</td>
                                        @endif
                                        @if ($servicio_publico->id_notaventa == null)
                                            <td>
                                                <a href="{{ route('servicio.pagarServicio',$servicio_publico->s_id) }}">Pagar</a>
                                            </td>
                                        @else
                                            <td>Todo OK!</td>
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
    @include('layauts.vistas',['pagina'=>'servicio.listar.user.todo'])

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

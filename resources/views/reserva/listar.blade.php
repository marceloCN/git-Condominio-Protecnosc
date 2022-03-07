@extends('layauts.dashboard')

@section('title', 'Listar todas las reservas')

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
                        LISTADO DE TODAS LAS RESERVAS
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>Condominio</th>
                                    <th>Nro Area Comun</th>
                                    <th>Tipo Area Comun</th>
                                    <th>fecha</th>
                                    <th>HoraInicio</th>
                                    <th>HoraFin</th>
                                    <th>Acontecimiento</th>
                                    <th>Descripcion</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>Condominio</th>
                                    <th>Nro Area Comun</th>
                                    <th>Tipo Area Comun</th>
                                    <th>fecha</th>
                                    <th>HoraInicio</th>
                                    <th>HoraFin</th>
                                    <th>Acontecimiento</th>
                                    <th>Descripcion</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($reservas as $reserva)
                                    <tr>
                                        <td>{{ $reserva->res_id }}</td>
                                        <td>{{ $reserva->usuario->u_nom }}</td>
                                        <td>{{ $reserva->manzana->condominio->con_nom }}</td>
                                        <td>{{ $reserva->manzana->ma_nro }}</td>
                                        <td>{{ $reserva->manzana->ma_tipo }}</td>                                        
                                        <td>{{ $reserva->res_fecha }}</td>
                                        <td>{{ $reserva->res_hini }}</td>
                                        <td>{{ $reserva->res_hfin }}</td>      
                                        <td>{{ $reserva->res_acontecimiento }}</td>
                                        <td>{{ $reserva->res_descripcion }}</td>                                                            
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'reserva.listar'])

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
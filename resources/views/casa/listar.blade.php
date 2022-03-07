@extends('layauts.dashboard')

@section('title', 'Listar todas las casas')

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
                        LISTADO DE TODAS LAS CASAS DE LAS AREAS COMUNES
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>Tipo</th>
                                    <th>Cargo</th>
                                    <th>Nro Casa</th>
                                    <th>Dimension</th>
                                    <th>Nro Area Comun</th>
                                    <th>Condominio</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>Tipo</th>
                                    <th>Cargo</th>
                                    <th>Nro Casa</th>
                                    <th>Dimension</th>
                                    <th>Nro Area Comun</th>
                                    <th>Condominio</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($casas as $casa)
                                    <tr>
                                        <td>{{ $casa->ca_id }}</td>
                                        <td>{{ $casa->u_nom }}</td>
                                        <td>{{ $casa->r_tipo }}</td>
                                        <td>{{ $casa->r_cargo }}</td>
                                        <td>{{ $casa->ca_nro }}</td>
                                        <td>{{ $casa->ca_dimension }}</td>
                                        <td>{{ $casa->ma_nro }}</td>                                        
                                        <td>{{ $casa->con_nom }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'casa.listar'])

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
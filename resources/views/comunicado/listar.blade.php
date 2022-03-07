@extends('layauts.dashboard')

@section('title', 'Listar todos los comunicado')

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
                        LISTADO DE TODOS LOS COMUNICADOS
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>fecha</th>
                                    <th>Hora</th>
                                    <th>Asunto</th>
                                    <th>tipo</th>
                                    <th>opciones</th>                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>fecha</th>
                                    <th>Hora</th>
                                    <th>Asunto</th>
                                    <th>tipo</th>
                                    <th>opciones</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($comunicados as $comunicado)
                                    <tr>
                                        <td>{{ $comunicado->c_id }}</td>
                                        <td>{{ $comunicado->u_nom }}</td>
                                        <td>{{ $comunicado->c_fecha }}</td>
                                        <td>{{ $comunicado->c_hora }}</td>
                                        <td>{{ $comunicado->c_asunto }}</td>                                        
                                        <td>{{ $comunicado->c_tipo }}</td>       
                                        <td>
                                            <a href="#">Modificar</a>
                                            <br>
                                            <a href="#">Eliminar</a>
                                            <br>
                                            @if ($comunicado->c_tipo == 'reunion')
                                                <a href="{{ route('acta.listar',$comunicado->c_id) }}">Mas detalle</a>
                                            @endif
                                        </td>                                                  
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layauts.vistas',['pagina'=>'comunicado.listar'])

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
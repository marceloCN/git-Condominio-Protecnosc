@extends('layauts.dashboard')

@section('title', 'Listar todos tus mensajes')

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
                        LISTADO DE TODOS TUS MENSAJES
                    </h2>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Asunto</th>
                                    <th>estado</th>
                                    <th>fecha</th>
                                    <th>body</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Asunto</th>
                                    <th>estado</th>
                                    <th>fecha</th>
                                    <th>body</th>
                                    <th>opciones</th>
                                </tr>
                            </tfoot>

                            <tbody>
                                @foreach ($mensajes as $mensaje)
                                    <tr>
                                        <td>{{ $mensaje->m_id }}</td>
                                        <td>{{ $mensaje->m_asunto }}</td>
                                        <td>{{ $mensaje->m_estado }}</td>
                                        <td>{{ $mensaje->m_fecha }}</td>
                                        <td>{{ $mensaje->m_body }}</td>
                                        {{-- {{ route('mensaje.modificar',$mensaje->m_id) }} --}}
                                        <td>
                                            <a href="{{ route('mensaje.modificar', $mensaje->m_id) }}">Modificar</a>
                                            <br>
                                            <a role="button" href="#" class="btn btn-link" data-toggle="modal"
                                                data-target="#modalEliminarMensaje-{{ $mensaje->m_id }}">
                                                Eliminar
                                            </a>
                                            <br>
                                        </td>
                                        @include('mensaje.modal_eliminar', $mensaje)
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
    @include('layauts.vistas',['pagina'=>'mensaje.listar.personal'])

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

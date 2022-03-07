@extends('layauts.dashboard')

@section('title', 'welcome to Protecnosc')  


@section('content')


    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">

                <div class="header">
                    <h2>Comunicados mas recientes</h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-hover dashboard-task-infos">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tipo</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Asunto</th>
                                    <th> Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comunicados as $comunicado)
                                    <tr>
                                        <td>{{ $comunicado->c_id }}</td>
                                        <td>{{ $comunicado->c_tipo }}</td>
                                        <td>{{ $comunicado->c_fecha }}</td>
                                        <td>{{ $comunicado->c_hora }}</td>
                                        <td>{{ $comunicado->c_asunto }}</td>
                                        <td>
                                            @if ($comunicado->c_tipo == 'reunion')
                                                <a href="{{ route('acta.listar',$comunicado->c_id) }}">Mas detalle</a>
                                            @else
                                                ninguna
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('layauts.vistas',['pagina'=>'inicio.dashboard'])
        </div>

        
    </div>
    

@endsection
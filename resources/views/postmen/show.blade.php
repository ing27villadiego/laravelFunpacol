@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-heading">

        </div>
        <div class="panel-body content-box-header panel-heading">
            <div class="panel-title">LISTA DE PADRINOS DEL MENSAJERO <br><strong> {{$postmen->first_name}} </strong> </div>
            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
            </div>
        </div>
        <div class="content-box-large box-with-header">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-lesss" id="example">
                            <thead>
                            <tr>
                                <th>Codigo Padrino</th>
                                <th>Nombre Padrino</th>
                                <th>Apellido Padrino</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($results as $result)
                                <tr >
                                    <td>{{$result->code_godfather}}</td>
                                    <td>{{ $result->first_name}}</td>
                                    <td>{{ $result->last_name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

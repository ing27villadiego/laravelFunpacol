@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-heading">
            <div class="panel-title"> AHIJADO {{ $godchildren->first_name }} </div>
        </div>
        <div class="panel-body content-box-header panel-heading">
            <div class="panel-heading">
                <div class="panel-title">LISTA DE  SUS PADRINOS </div>
            </div>
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
                                <th>Nombres </th>
                                <th>Apellido</th>
                                <th>Tipo de padrino</th>
                                <th>estado </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($godfathers as $godfather)
                                <tr >
                                    <td>{{ $godfather->first_name}}</td>
                                    <td>{{ $godfather->last_name}}</td>
                                    <td>{{ $godfather->type_godfather }}</td>
                                    <td>{{ $godfather->state }}</td>
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

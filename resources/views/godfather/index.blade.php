@extends('layouts.app')

@section('content')
  <div class="content-box-large">
    <div class="panel-heading">
      <div class="panel-title">LISTA DE PADRINOS</div>
    </div>
    <div class="panel-body content-box-header panel-heading">

      <div class="box-footer panel-title clearfix no-border">
        <i class="fa fa-plus glyphicon glyphicon-plus-sign"></i> <a href="{{ url('godfather/create') }}">Agregar nuevo</a>
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
                  <th>Codigo </th>
                  <th>Nombres </th>
                  <th>Apellidos</th>
                  <th>Documento</th>
                  <th>celular oficina</th>
                  <th>ciudad</th>
                  <th>Ahijado</th>
                  <th>Promotor</th>
                  <th>Asesor</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($godfathers as $godfather)
                  <tr >
                    <td>{{ $godfather->code_godfather}}</td>
                    <td>{{ $godfather->first_name}}</td>
                    <td>{{ $godfather->last_name}}</td>
                    <td>{{ $godfather->document}}</td>
                    <td>{{ $godfather->cell_phone_office}}</td>
                    <td>{{ $godfather->city->name}}</td>
                    <td>{{ $godfather->godchildren->first_name}}</td>
                    <td>{{ $godfather->promoter->first_name}}</td>
                    <td>{{ $godfather->adviser->first_name}}</td>
                    <td>
                      <a class="btn btn-success btn-xs" href="{{route('godfather.edit', $godfather->id)}}" role="button">
                        <i class="glyphicon glyphicon-pencil">
                        </i>
                      </a>
                      <a class="btn btn-success btn-xs" href="{{route('godfather.edit', $godfather->id)}}" role="button">
                        <i class="glyphicon glyphicon-pencil">
                        </i>
                      </a>
                      <a class="btn btn-danger btn-xs" href="{{route('godfather.destroy', $godfather->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button">
                        <i class="glyphicon glyphicon-remove">
                        </i>
                      </a>
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
@endsection

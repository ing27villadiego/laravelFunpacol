@extends('layouts.app')

@section('content')
  <div class="content-box-large">
    <div class="panel-heading">
      <div class="panel-title">LISTA DE MENSAJEROS</div>
    </div>
    <div class="panel-body content-box-header panel-heading">

      <div class="box-footer panel-title clearfix no-border">
        <i class="fa fa-plus glyphicon glyphicon-plus-sign"></i> <a href="{{ url('postmen/create') }}">AGREGAR NUEVO MENSAJERO</a>
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
                  <th>Apellidos</th>
                  <th>Documento</th>
                  <th>Celular</th>
                  <th>Ciudad</th>
                  <th>estado</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($postmens as $postmen)
                  <tr >
                    <td>{{ $postmen->first_name}}</td>
                    <td>{{ $postmen->last_name}}</td>
                    <td>{{ $postmen->document}}</td>
                    <td>{{ $postmen->cell_phone}}</td>
                    <td>{{ $postmen->city->name}}</td>
                    <td>{{ $postmen->state}}</td>
                    <td>
                      <a class="btn btn-info btn-sm" href="{{route('postmen.show', $postmen->id)}}" role="button">
                        <i class="glyphicon glyphicon-eye-open">
                        </i>
                      </a>
                      <a class="btn btn-success btn-sm" href="{{route('postmen.edit', $postmen->id)}}" role="button">
                        <i class="glyphicon glyphicon-pencil">
                        </i>
                      </a>
                      <a class="btn btn-danger btn-sm" href="{{route('postmen.destroy', $postmen->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button">
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

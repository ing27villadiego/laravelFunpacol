@extends('layouts.app')

@section('content')
  <div class="content-box-large">
    <div class="panel-heading">
      <div class="panel-title">LISTA DE COBROS</div>
    </div>
    <div class="panel-body content-box-header panel-heading">

      <div class="box-footer panel-title clearfix no-border">
        <i class="fa fa-plus glyphicon glyphicon-plus-sign"></i> <a href="{{ url('postmenPortfolio/create') }}">Agregar nuevo</a>
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
                <th>id</th>
                <th>Padrino</th>
                <th>Mensajero</th>
                <th>Accion</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($postmenPortfolios as $postmenPortfolio)
                <tr >
                  <td>{{ $postmenPortfolio->id}}</td>
                  <td>{{ $postmenPortfolio->godfather->first_name}}</td>
                  <td>{{ $postmenPortfolio->postmen->first_name}}</td>
                  <td>
                    <a class="btn btn-success btn-sm" href="{{route('postmenPortfolio.edit', $postmenPortfolio->id)}}" role="button">
                      <i class="glyphicon glyphicon-pencil">
                      </i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{route('postmenPortfolio.destroy', $postmenPortfolio->id)}}" onclick="return confirm('Quiere borrar el registro?')" role="button">
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

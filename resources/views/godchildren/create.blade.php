@extends('layouts.app')

@section('content')
<div class="content-box-large">
    <div class="panel-body content-box-header panel-heading">
        <div class="box-footer panel-title clearfix no-border">
            <h3>FORMULARIO AGREGAR AHIJADOS</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-10">
            @include('errors.error')
        </div>
        <div class="col-lg-11">


        {!! Form::open(['route' => 'godchildren.store', 'method'=>'POST', 'autocomplete'=>'off']) !!}

        {{ Form::token() }}
        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="first_name" class="control-label">Nombres</label>
                    {!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Nombres...']) !!}
                </div>
                <div class="col-lg-4">
                    <label for="last_name" class="control-label">Apellidos</label>
                    {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Apellidos...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="dokumenttyp_id" class="control-label">Tipo Doc</label>
                    {!! Form::select('dokumenttyp_id',$dokumenttyps, null, ['class'=>'form-control', 'placeholder'=>'Seleccione Tipo Doc...']) !!}
                </div>
                <div class="col-lg-4">
                    <label for="document" class="control-label">Documento</label>
                    {!! Form::text('document', null, ['class'=>'form-control', 'placeholder'=>'Documento ...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="date_birthday" class="control-label">Cumple Años</label>
                    {!! Form::date('date_birthday', null, ['class'=>'form-control']) !!}
                </div>
                <div class="col-lg-4">
                    <label for="city_id" class="control-label">Ciudad</label>
                    {!! Form::select('city_id',$cities, null, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="datafamily_id" class="control-label">Familiar</label>
                    {!! Form::select('datafamily_id',$datafamilies, null, ['class'=>'form-control', 'placeholder'=>'Seleccione un familiar...']) !!}
                </div>
            </div>
        </div>

        <div class="modal-footer">
            {!! Form::submit('Agregar Ahijado', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection

@section('js')

    <script>
        $('.chosen').chosen({
            no_results_text: 'Ops.. error '
        });
    </script>

@endsection

@extends('layouts.app')

@section('content')

    <div class="content-box-large">
        <div class="panel-body content-box-header panel-heading">

            <div class="box-footer panel-title clearfix no-border">
                <h3>FORMULARIO AGREGAR EMPLEADOS</h3>
            </div>
        </div>
        <hr>
        <div class="row">

            <div class="col-lg-10">
                @include('errors.error')
            </div>
            <div class="col-lg-11">

        {!! Form::open(['route' => 'employee.store', 'method'=>'POST', 'autocomplete'=>'off']) !!}

        {{ Form::token() }}
        <br>
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
                    <label for="dokumenttyp_id" class="control-label">Tipo Documento</label>
                    {!! Form::select('dokumenttyp_id',$dokumenttyps, null, ['class'=>'form-control', 'placeholder'=>'Seleccione Tipo Doc...']) !!}
                </div>
                <div class="col-lg-4">
                    <label for="document" class="control-label">Documento</label>
                    {!! Form::text('document', null, ['class'=>'form-control', 'placeholder'=>'Nº documento...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="address" class="control-label">Direccion </label>
                    {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Direccion del Empleado...']) !!}
                </div>
                <div class="col-lg-4">
                    <label for="cell_phone" class="col-sm-2 control-label">Celular</label>
                    {!! Form::text('cell_phone', null, ['class'=>'form-control', 'placeholder'=>'Celular del Empleado...']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="date_birthday" class="control-label">Cumple Años</label>
                    {!! Form::date('date_birthday', null, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños...']) !!}
                </div>
                <div class="col-lg-4">
                    <label for="email" class="control-label">Email</label>
                    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-4">
                    <label for="city_id" class="control-label">Ciudad</label>
                    {!! Form::select('city_id',$cities, null, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                </div>
            </div>
        </div>


        <div class="modal-footer">
            {!! Form::submit('Agregar Empleado', ['class' => 'btn btn-primary']) !!}
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
            placeholder_text_single: 'Seleccione una Ciudad',
            no_results_text: 'Ops.. error ',
        });
    </script>

@endsection
@extends('layouts.app')

@section('content')
<div class="content-box-large">
    <div class="panel-body content-box-header panel-heading">
        <div class="box-footer panel-title clearfix no-border">
            <h3>FORMULARIO EDITAR DATOS FAMILIARES</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-10">
            @include('errors.error')
        </div>
        <div class="col-lg-11">


            {!! Form::open(['route' => ['datafamily.update', $datafamily], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

            {{ Form::token() }}

            <br>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('first_name', 'Nombres', ['class' => 'control-label']) !!}
                        {!! Form::text('first_name', $datafamily->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('last_name', 'Apellidos', ['class' => 'control-label']) !!}
                        {!! Form::text('last_name', $datafamily->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos...']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('dokumenttyp_id', 'Tipo Documento', ['class' => 'control-label']) !!}
                        {!! Form::select('dokumenttyp_id',$dokumenttyps, $datafamily->dokumenttyp->id, ['class'=>'form-control', 'placeholder'=>'Seleccione Tipo Doc...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('document', 'Documento', ['class' => 'control-label']) !!}
                        {!! Form::text('document', $datafamily->document, ['class'=>'form-control', 'placeholder'=>'Documento ...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('city_id', 'Ciudad', ['class' => 'control-label']) !!}
                        {!! Form::select('city_id',$cities, $datafamily->city->id, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('address', 'Direccion', ['class' => 'control-label']) !!}
                        {!! Form::text('address', $datafamily->address, ['class'=>'form-control', 'placeholder'=>'Direccion ...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('cell_phone', 'Celular', ['class' => 'control-label']) !!}
                        {!! Form::text('cell_phone', $datafamily->cell_phone, ['class'=>'form-control', 'placeholder'=>'Celular ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('date_birthday', 'Cumple Años', ['class' => 'control-label']) !!}
                        {!! Form::date('date_birthday', $datafamily->date_birthday, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('number_brothers', 'Numero de Hijos', ['class' => 'control-label']) !!}
                        {!! Form::number('number_brothers', $datafamily->number_brothers, ['class'=>'form-control', 'placeholder'=>'Numero de Hijos o Hermanos del Niño...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('name_brothers', 'Nombre de Hijos', ['class' => 'control-label']) !!}
                        {!! Form::text('name_brothers', $datafamily->name_brothers, ['class'=>'form-control', 'placeholder'=>'Nombre de Hijos o Hermanos del Niño...']) !!}
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                {!! Form::submit('Agregar Datos Familiares', ['class' => 'btn btn-primary']) !!}
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

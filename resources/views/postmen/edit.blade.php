@extends('layouts.app')

@section('content')
<div class="content-box-large">
    <div class="panel-body content-box-header panel-heading">

        <div class="box-footer panel-title clearfix no-border">
            <h3>FORMULARIO EDITAR MENSAJERO</h3>
        </div>
    </div>
    <hr>
    <div class="row">

        @include('errors.error')
        <div class="col-lg-11">


            {!! Form::open(['route' => ['postmen.update', $postmen], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

            {{ Form::token() }}
            <br>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('first_name', 'Nombres') !!}
                        {!! Form::text('first_name', $postmen->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres del Mensajero...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('last_name', 'Apellidos') !!}
                        {!! Form::text('last_name', $postmen->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos del Mensajero...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('dokumenttyp_id', 'Tipo Doc') !!}
                        {!! Form::select('dokumenttyp_id',$dokumenttyps, $postmen->dokumenttyp->id, ['class'=>'form-control', 'placeholder'=>'Seleccione Tipo Doc...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('document', 'Documento') !!}
                        {!! Form::text('document', $postmen->document, ['class'=>'form-control', 'placeholder'=>'Documento del Mensajero...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('address', 'Direccion') !!}
                        {!! Form::text('address', $postmen->address, ['class'=>'form-control', 'placeholder'=>'Direccion del Mensajero...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('cell_phone', 'Celular') !!}
                        {!! Form::text('cell_phone', $postmen->cell_phone, ['class'=>'form-control', 'placeholder'=>'Celular del Mensajero...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('email', 'Correo', ['class'=>'col-md-2 control-label']) !!}
                        {!! Form::email('email', $postmen->email, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('date_birthday', 'Cumpleaños', ['class'=>'col-md-2 control-label']) !!}
                        {!! Form::date('date_birthday', $postmen->date_birthday, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('city_id', 'Ciudad', ['class'=> 'col-md-2 ']) !!}
                        {!! Form::select('city_id',$cities, $postmen->city->id, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('zone_id', 'Zona', ['class'=> 'col-md-2 control-label']) !!}
                        {!! Form::select('zone_id',$zones, $postmen->zone->id, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Zona...']) !!}
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                {!! Form::submit('Actualizar Mensajero', ['class' => 'btn btn-primary']) !!}
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
            placeholder_text_single: 'Seleccione un padrino',
            no_results_text: 'Ops.. error ',
        });
    </script>

@endsection
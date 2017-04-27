@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-body content-box-header panel-heading">

            <div class="box-footer panel-title clearfix no-border">
                <h3>FORMULARIO AGREGAR PROMOTOR</h3>
            </div>
        </div>
        <div class="row">

            @include('errors.error')
            <div class="col-lg-11">

            {!! Form::open(['route' => 'promoter.store', 'method'=>'POST', 'autocomplete'=>'off']) !!}

            {{ Form::token() }}
            <hr>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('first_name', 'Nombres',['class'=> 'control-label']) !!}
                        {!! Form::text('first_name', null, ['class'=>'form-control', 'placeholder'=>'Nombres del Promotor...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('last_name', 'Apellidos',['class'=> 'control-label']) !!}
                        {!! Form::text('last_name', null, ['class'=>'form-control', 'placeholder'=>'Apellidos del Promotor...']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('dokumenttyp_id', 'Tipo Documento',['class'=> 'control-label']) !!}
                        {!! Form::select('dokumenttyp_id',$dokumenttyps, null, ['class'=>'form-control', 'placeholder'=>'Seleccione Tipo Doc...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('document', 'Documento',['class'=> 'control-label']) !!}
                        {!! Form::text('document', null, ['class'=>'form-control', 'placeholder'=>'Documento del Promotor...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('address', 'Direccion',['class'=> 'control-label']) !!}
                        {!! Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Direccion del Promotor...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('cell_phone', 'Celular',['class'=> 'control-label']) !!}
                        {!! Form::text('cell_phone', null, ['class'=>'form-control', 'placeholder'=>'Celular del Promotor...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('date_birthday', 'Cumpleaños', ['class'=>'control-label']) !!}
                        {!! Form::date('date_birthday', null, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('email', 'Correo', ['class'=>'control-label']) !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'example@gmail.com...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('city_id', 'Ciudad',['class'=> 'control-label']) !!}
                        {!! Form::select('city_id',$cities, null, ['class'=>'form-control ch', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                {!! Form::submit('Agregar Promotor', ['class' => 'btn btn-primary']) !!}
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


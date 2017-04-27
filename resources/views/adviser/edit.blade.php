@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-body content-box-header panel-heading">

            <div class="box-footer panel-title clearfix no-border">
                <h3>FORMULARIO EDITAR ASESOR</h3>
            </div>
        </div>
        <div class="row">

            @include('errors.error')
            <div class="col-lg-11">

            {!! Form::open(['route' => ['adviser.update', $adviser], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

            {{ Form::token() }}
            <hr>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-4">
                        {!! Form::label('first_name', 'Nombres', ['class'=> 'control-label']) !!}
                        {!! Form::text('first_name', $adviser->first_name, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('last_name', 'Apellidos', ['class'=> 'control-label']) !!}
                        {!! Form::text('last_name', $adviser->last_name, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('dokumenttyp_id', 'Tipo Documento', ['class'=> 'control-label']) !!}
                        {!! Form::select('dokumenttyp_id',$dokumenttyps, $adviser->dokumenttyp->id, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('document', 'Documento', ['class'=> 'control-label']) !!}
                        {!! Form::text('document', $adviser->document, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('address', 'Direccion', ['class'=> 'control-label']) !!}
                        {!! Form::text('address', $adviser->address, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('cell_phone', 'Celular', ['class'=> 'control-label']) !!}
                        {!! Form::text('cell_phone', $adviser->cell_phone, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('date_birthday', 'Cumpleaños', ['class'=>'control-label']) !!}
                        {!! Form::date('date_birthday', $adviser->date_birthday, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('email', 'Correo', ['class'=>'control-label']) !!}
                        {!! Form::email('email', $adviser->email, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('city_id', 'Ciudad', ['class'=> 'control-label']) !!}
                        {!! Form::select('city_id',$cities, $adviser->city->id, ['class'=>'form-control chosen']) !!}
                    </div>
                    <div class="col-md-4">
                        {!! Form::label('promoter_id', 'Promotor', ['class'=> 'control-label']) !!}
                        {!! Form::select('promoter_id',$promoters, $adviser->promoter->id, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                {!! Form::submit('Actualizar Asesor', ['class' => 'btn btn-primary']) !!}
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
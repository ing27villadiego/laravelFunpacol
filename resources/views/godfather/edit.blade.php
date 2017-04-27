@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-body content-box-header panel-heading">

            <div class="box-footer panel-title clearfix no-border">
                <h3>FORMULARIO ACTUALIZAR PADRINO</h3>
            </div>
        </div>
        <hr>
        <div class="row">

            @include('errors.error')
            <div class="col-lg-11">

                {!! Form::open(['route' => ['godfather.update', $godfather], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

                {{ Form::token() }}
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-3">
                        {{ Form::label('date_membership', 'Fecha de vinculacion', ['class' => 'control-label ']) }}
                        {!! Form::date('date_membership', $godfather->date_membership, ['class'=>'form-control ']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::label('code_godfather', 'Codigo Padrino') !!}
                        {!! Form::number('code_godfather', $godfather->code_godfather, ['class'=>'form-control', 'placeholder'=>'Codigo Padrino...']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::label('promoter_id', 'Nombre del Promotor', ['class' => 'control-label']) !!}
                        {!! Form::select('promoter_id',$promoters, $godfather->promoter->id, ['class'=>'form-control ', 'placeholder'=>'Seleccione un promoter...']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::label('adviser_id', 'Asesor', ['class' => 'control-label']) !!}
                        {!! Form::select('adviser_id',$advisers, $godfather->adviser->id, ['class'=>'form-control ', 'placeholder'=>'Seleccione un asesor...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-3">
                        {!! Form::label('first_name', 'Nombres') !!}
                        {!! Form::text('first_name', $godfather->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres ...']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::label('last_name', 'Apellidos') !!}
                        {!! Form::text('last_name', $godfather->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos ...']) !!}
                    </div>

                    <div class="col-lg-3">
                        {!! Form::label('dokumenttyp_id', 'Tipo Doc', ['class' => 'control-label ']) !!}
                        {!! Form::select('dokumenttyp_id',$dokumenttyps, $godfather->dokumenttyp->id, ['class'=>'form-control ', 'placeholder'=>'Seleccione tipo Doc...']) !!}
                    </div>
                    <div class="col-lg-3">
                        {!! Form::label('document', 'Documento') !!}
                        {!! Form::text('document', $godfather->document, ['class'=>'form-control', 'placeholder'=>'Documento ...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-6">
                        {{ Form::label('date_birthday', 'Fecha de cumpleaños', ['class' => 'control-label ']) }}
                        {!! Form::date('date_birthday', $godfather->date_birthday, ['class'=>'form-control ']) !!}
                    </div>
                    <div class="col-lg-6">
                        {!! Form::label('email', 'Correo') !!}
                        {!! Form::email('email', $godfather->email, ['class'=>'form-control', 'placeholder'=>'example@gmail.com ...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-6">
                        {!! Form::label('address_office', 'Direccion oficina') !!}
                        {!! Form::text('address_office', $godfather->address_office, ['class'=>'form-control', 'placeholder'=>'Direccion oficina ...']) !!}
                    </div>
                    <div class="col-lg-6">
                        {!! Form::label('district_office', 'Barrio') !!}
                        {!! Form::text('district_office', $godfather->district_office, ['class'=>'form-control', 'placeholder'=>'Barrio ...']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('phone_office', 'Telefono') !!}
                        {!! Form::text('phone_office', $godfather->phone_office, ['class'=>'form-control', 'placeholder'=>'Telefono ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('cell_phone_office', 'Celular') !!}
                        {!! Form::text('cell_phone_office', $godfather->cell_phone_office, ['class'=>'form-control', 'placeholder'=>'Celular ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('whatsapp', 'Whatsapp') !!}
                        {!! Form::text('whatsapp', $godfather->whatsapp, ['class'=>'form-control', 'placeholder'=>'Whatsapp ...']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('profesion', 'Profesion') !!}
                        {!! Form::text('profesion', $godfather->profesion, ['class'=>'form-control', 'placeholder'=>'Profesion ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('charge', 'Cargo') !!}
                        {!! Form::text('charge', $godfather->charge, ['class'=>'form-control', 'placeholder'=>'Cargo ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('business', 'Empresa') !!}
                        {!! Form::text('business', $godfather->business, ['class'=>'form-control', 'placeholder'=>'Empresa ...']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('address_house', 'Direccion Residencia') !!}
                        {!! Form::text('address_house', $godfather->address_house, ['class'=>'form-control', 'placeholder'=>'Direccion Residencia ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('district_house', 'Barrio') !!}
                        {!! Form::text('district_house', $godfather->district_house, ['class'=>'form-control', 'placeholder'=>'Barrio ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('phone_house', 'Telefono') !!}
                        {!! Form::text('phone_house', $godfather->phone_house, ['class'=>'form-control', 'placeholder'=>'Telefono ...']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-3">
                        {!! Form::label('department_id', 'Departamento') !!}
                        {!! Form::select('department_id',$departments, $godfather->department->id, ['class'=>'form-control', 'placeholder'=>'Seleccione un Departamento...']) !!}
                    </div>

                    <div class="col-md-4">
                        {!! Form::label('city_id', 'Ciudad', ['class'=> 'control-label']) !!}
                        {!! Form::select('city_id',$cities, $godfather->city->id, ['class'=>'form-control', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('godchildren_id', 'Nombre del Niño', ['class' => 'control-label']) !!}
                        {!! Form::select('godchildren_id',$godchildrens, $godfather->godchildren->id, ['class'=>'form-control ', 'placeholder'=>'Seleccione un Niño...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('community', 'Comunidad', ['class' => 'control-label']) !!}
                        {!! Form::text('community', $godfather->community, ['class'=>'form-control', 'placeholder'=>'Comunidad del niño ...']) !!}
                    </div>
                </div>
            </div>
            <hr>
            <span>FORMA DE PAGO DE APORTE</span><br>
            <span>  PERIODO DE PAGO DE LOS APORTES</span>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('paymenttype_id', 'Tipo de Pago', ['class' => 'control-label']) !!}
                        {!! Form::select('paymenttype_id',$paymenttypes, $godfather->paymenttype->id, ['class'=>'form-control ', 'placeholder'=>'Seleccione ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('paymentperiod_id', 'Periodo de pago', ['class' => 'control-label']) !!}
                        {!! Form::select('paymentperiod_id',$paymentperiods, $godfather->paymentperiod->id, ['class'=>'form-control ', 'placeholder'=>'Seleccione ...']) !!}
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('type_godfather', 'Tipo de padrino', ['class' => 'control-label']) !!}
                        {!! Form::select('type_godfather', ['padrino-completo'=> 'Padrino completo','padrino-compartido'=> 'Padrino compartido','donacion-unica'=> 'Donacion unica'], $godfather->type_godfather, ['class'=>'form-control ', 'placeholder'=>'Seleccione ...']) !!}
                    </div>
                </div>
            </div>
            <span>MI DONACION MENSUAL SERA DE </span>
            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('value_donation', 'Valor de la donacion') !!}
                        {!! Form::text('value_donation', $godfather->value_donation, ['class'=>'form-control', 'placeholder'=>'Valor de la donacion ...']) !!}
                    </div>
                    <div class="col-lg-4">
                        {!! Form::label('day_colletion', 'Dia del recaudo') !!}
                        {!! Form::text('day_colletion', $godfather->day_colletion, ['class'=>'form-control', 'placeholder'=>'Dia del recaudo ...']) !!}
                    </div>
                </div>
            </div>

                <div class="modal-footer">
                    {!! Form::submit('Actualizar Empleado', ['class' => 'btn btn-primary']) !!}
                    {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
                </div>

            {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

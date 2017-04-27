@extends('layouts.app')

@section('content')
<div class="content-box-large">
    <div class="panel-body content-box-header panel-heading">
        <div class="box-footer panel-title clearfix no-border">
            <h3>FORMULARIO EDITAR AHIJADO</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-10">
            @include('errors.error')
        </div>
        <div class="col-lg-11">

                {!! Form::open(['route' => ['godchildren.update', $godchildren], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

                {{ Form::token() }}
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-4">
                            <label for="first_name" class="control-label">Nombres</label>
                            {!! Form::text('first_name', $godchildren->first_name, ['class'=>'form-control', 'placeholder'=>'Nombres...']) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="last_name" class="control-label">Apellidos</label>
                            {!! Form::text('last_name', $godchildren->last_name, ['class'=>'form-control', 'placeholder'=>'Apellidos...']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-4">
                            <label for="dokumenttyp_id" class="control-label">Tipo Doc</label>
                            {!! Form::select('dokumenttyp_id',$dokumenttyps, $godchildren->dokumenttyp->id, ['class'=>'form-control', 'placeholder'=>'Seleccione Tipo Doc...']) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="document" class="control-label">Documento</label>
                            {!! Form::text('document', $godchildren->document, ['class'=>'form-control', 'placeholder'=>'Documento del Empleado...']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-4">
                            <label for="date_birthday" class="control-label">Cumple Años</label>
                            {!! Form::date('date_birthday', $godchildren->date_birthday, ['class'=>'form-control', 'placeholder'=>'Fecha de Cumpleaños...']) !!}
                        </div>
                        <div class="col-lg-4">
                            <label for="city_id" class="control-label">Ciudad</label>
                            {!! Form::select('city_id',$cities, $godchildren->city->id, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="datafamily_id" class="control-label">Familiar </label>
                            {!! Form::select('datafamily_id',$datafamilies, $godchildren->datafamily->id, ['class'=>'form-control', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    {!! Form::submit('Actualizar Ahijado', ['class' => 'btn btn-primary']) !!}
                    {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}
                </div>

            </form><!-- /.form -->
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
@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-sm-10">
            <h3>FORMULARIO EDITAR ASESOR</h3>
            @include('errors.error')


            {!! Form::open(['route' => ['postmenPortfolio.update', $postmenportfolio], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

            {{ Form::token() }}
            <hr>

            <div class="row">
                <div class="form-group">
                    <div class="col-lg-4">
                        {!! Form::label('godfather_id', 'Seleccione un Padrino', ['class' => 'control-label']) !!}
                        {!! Form::select('godfather_id',$godfathers, $postmenportfolio->godfather->id,['class'=>'form-control chosen', 'placeholder'=>'Seleccione un padrino...']) !!}
                    </div>

                    <div class="col-lg-4">
                        {!! Form::label('postmen_id', 'Seleccione un Mensajero', ['class' => 'control-label']) !!}
                        {!! Form::select('postmen_id',$postmens, $postmenportfolio->postmen->id,['class'=>'form-control chosen', 'placeholder'=>'Seleccione un mensajero...']) !!}
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                {!! Form::submit('Actualizar Asesor', ['class' => 'btn btn-primary']) !!}
                {!! Form::reset('Cancelar', ['class' => 'btn btn-danger']) !!}

            </div>

            {!! Form::close() !!}

        </div>
    </div><!-- /.box -->


@endsection

@section('js')

    <script>
        $('.chosen').chosen({
            placeholder_text_single: 'Seleccione un padrino',
            no_results_text: 'Ops.. error ',
        });
    </script>

@endsection
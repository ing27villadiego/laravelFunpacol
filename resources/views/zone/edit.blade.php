@extends('layouts.app')

@section('title')
	Zona
@endsection

@section('content')
	<div class="content-box-large">
		<div class="panel-body content-box-header panel-heading">
			<div class="box-footer panel-title clearfix no-border">
				<h3>EDITAR ZONA</h3>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-10">
				@include('errors.error')
			</div>
			<div class="col-lg-11">


			{!! Form::open(['route' => ['zone.update', $zone], 'method'=>'PUT', 'autocomplete'=>'off']) !!}

			{{ Form::token() }}
			<div class="row">
				<div class="col-lg-4">
					<div class="form-group">
						{!! Form::label('name', 'Nombre De La Zona') !!}
						{!! Form::text('name', $zone->name, ['class'=>'form-control', 'placeholder'=>'Nombre de la zona...']) !!}
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						{!! Form::label('city_id', 'Ciudad') !!}
						{!! Form::select('city_id',$cities, $zone->city->id, ['class'=>'form-control chosen', 'placeholder'=>'Seleccione una Ciudad...']) !!}
					</div>
				</div>
			</div>

			<div class="modal-footer col-lg-8">
				{!! Form::submit('Update Zona', ['class' => 'btn btn-primary']) !!}
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
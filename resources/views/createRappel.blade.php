@extends('template')

@section('contenu')
	<div class="col-sm-offset-4 col-sm-4">
		<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Création d'un rappel</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(['route' => 'rappel.store', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('Titre_Rappel') ? 'has-error' : '' !!}">
						{!! Form::text('Titre_Rappel', null, ['class' => 'form-control', 'placeholder' => 'Titre du rappel']) !!}
						{!! $errors->first('Titre_Rappel', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('Date_Rappel') ? 'has-error' : '' !!}">
					  	{!! Form::date('Date_Rappel', null, ['class' => 'form-control', 'placeholder' => 'Date du rappel','id' => 'datepicker']) !!}
							{!! $errors->first('Date_Rappel', '<small class="help-block">:message</small>') !!}

					</div>


					{!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection

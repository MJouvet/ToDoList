@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Modification d'une tâche</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::model($tache, ['route' => ['tache.update', $tache->Id_Tache], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('Titre_Tache') ? 'has-error' : '' !!}">
					  	{!! Form::text('Titre_Tache', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
					  	{!! $errors->first('Titre_Tache', '<small class="help-block">:message</small>') !!}
					</div>
          <div class="form-group {!! $errors->has('Date_In_Tache') ? 'has-error' : '' !!}">
					  	{!! Form::date('Date_In_Tache', null, ['class' => 'form-control', 'placeholder' => 'Date de début']) !!}
					  	{!! $errors->first('Date_In_Tache', '<small class="help-block">:message</small>') !!}
					</div>

          <div class="form-group {!! $errors->has('Date_Out_Tache') ? 'has-error' : '' !!}">
					  	{!! Form::date('Date_Out_Tache', null, ['class' => 'form-control', 'placeholder' => 'Date de fin']) !!}
					  	{!! $errors->first('Date_Out_Tache', '<small class="help-block">:message</small>') !!}
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

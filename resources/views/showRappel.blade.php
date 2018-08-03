@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche du rappel</div>
			<div class="panel-body">
				<p>Titre du rappel : {{ $rappel->Titre_Rappel }}</p>
        <p>Date de rappel : {{ date('d-m-Y', strtotime($rappel->Date_Rappel)) }}</p>


			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection

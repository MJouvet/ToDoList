@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche de la tâche</div>
			<div class="panel-body">
				<p>Titre de la tâche : {{ $tache->Titre_Tache }}</p>
        <p>Date de début de la tâche : {{ date('d-m-Y', strtotime($tache->Date_In_Tache)) }}</p>
        <p>Date de fin de la tâche : {{ date('d-m-Y', strtotime($tache->Date_Out_Tache)) }}</p>

			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
@endsection

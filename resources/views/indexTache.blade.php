@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des tâches</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id Tache</th>
						<th>la tache</th>
            <th>Date de début</th>
            <th>Date de fin</th>

            <th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($date as $tache)
						<tr>
							<td>{!! $tache->Id_Tache !!}</td>
						  <td class="text-primary"><strong>{!! $tache->Titre_Tache !!}</strong></td>
              <td class="text-primary"><strong>{!! date('d-m-Y', strtotime($tache->Date_In_Tache)) !!}</strong></td>
              <td class="text-primary"><strong>{!! date('d-m-Y', strtotime($tache->Date_Out_Tache)) !!}</strong></td>



							<td>{!! link_to_route('tache.show', 'Voir', [$tache->Id_Tache], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('tache.edit', 'Modifier', [$tache->Id_Tache], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['tache.destroy', $tache->Id_Tache]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cette tâche ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>

		</div>
		{!! link_to_route('tache.create', 'Ajouter une tâche', [], ['class' => 'btn btn-info pull-right']) !!}
		{!! $links !!}
	</div>
@endsection

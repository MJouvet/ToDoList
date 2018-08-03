@extends('template')

@section('contenu')
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des Rappels</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id Rappel</th>
						<th>le rappel</th>
            <th>Date du rappel</th>


            <th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($Rappels as $rappel)
						<tr>
							<td>{!! $rappel->Id_Rappel !!}</td>
						  <td class="text-primary"><strong>{!! $rappel->Titre_Rappel !!}</strong></td>
              <td class="text-primary"><strong>{!! date('d-m-Y', strtotime($rappel->Date_Rappel)) !!}</strong></td>



							<td>{!! link_to_route('rappel.show', 'Voir', [$rappel->Id_Rappel], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('rappel.edit', 'Modifier', [$rappel->Id_Rappel], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['rappel.destroy', $rappel->Id_Rappel]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce rappel ?\')']) !!}
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

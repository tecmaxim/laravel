@extends('layouts.admin')
@section('content')
<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
  		<strong> Genero Actualizado Correctamente.</strong>
	</div>
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Operaciones</th>
			</thead>
			
			<tbody id="datos"></tbody>
		</table>
        @section('script')
		{!!Html::script('js/script2.js')!!}
	@endsection
@endsection

	
@foreach($Sexos as $value)
	<tr>
		<td>{{ $value->sexo }}</td>
		<td>
			<div class="btn-group" role="group" aria-label="...">
				<button class="btn btn-info">
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				</button>
				<button class="btn btn-danger">
					<i class="fa fa-trash-o" aria-hidden="true" ></i>
				</button>
			</div>
		</td>
	</tr>
@endforeach
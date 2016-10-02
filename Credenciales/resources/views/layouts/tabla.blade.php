<table class="table table-hover">
@if(isset($credencial))

<thead>
	<th>Foto</th>
	<th>Nombre</th>
	<th>Puesto</th>
	<th></th>

</thead>
<tbody>
	@foreach($credencial as $n)

		<tr>
			<td>
				<img src="imgCredenciales/{{ $n-> foto }}" class="img-rounded" alt="{{ $n-> nombre }}" width="150" height="200">
			</td>
			<td>{{ $n-> nombre }}</td>
			<td>{{ $n-> puesto }}</td>	
			<td>
				<a href="credenciales/{{ $n->id }}/edit" class="btn btn-warning  btn-xs" >Modificar</a>
				<a href="" class="btn btn-danger btn-xs" >Eliminar</a>
			</td>
		</tr>
	@endforeach

</tbody>

@endif


</table>


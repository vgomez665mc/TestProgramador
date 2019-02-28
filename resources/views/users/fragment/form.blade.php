@if ($usuario->exists)
	<form action="{{ route('users.update', $usuario->id) }}" method="POST">
		{{ method_field('PUT') }}
@else
	<form action="{{ route('users.store') }}" method="POST">
@endif
		{{ csrf_field() }}

		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre or old('nombre') }}">
		</div>

		<div class="form-group">
			<label for="correo">Correo:</label>
			<input type="email" name="correo" class="form-control" value="{{ $usuario->correo or old('correo') }}">
		</div>

		<div class="form-group">
			<label for="cedula">Cedula:</label>
			<input type="text" name="cedula" class="form-control" value="{{ $usuario->cedula or old('cedula') }}">
		</div>

		 <div class="form-group">
			<label for="grupo">Grupo:</label>
			<select class="form-control">
				@foreach($cargos as $cargo)
					<option value="{{ cargo->id }}" 
					{{ $usuario->cargo_id == $cargo->id? 'selected="selected"' : '' }} >
					{{ $cargo->nombre }}
					</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Guardar Usuario</button>
		</div>

	</form>
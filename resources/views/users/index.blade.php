@extends('layouts')

@section('content')

	<div class="col-sm-8">
		<h2>
			<br>
			Listado de Usuarios
			<a href="{{route('users.create')}}" class="btn btn-primary float-sm-right">Nuevo</a>
		</h2>
			<br>
			@include('users.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<th width="20px">ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Cedula</th>
				<th>Cargo</th>
				<th colspan="3" class="text-center">Operaciones</th>

			</thead>
			<tbody>
				@foreach($usuarios as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->nombre}}</td>
						<td>{{$user->correo}}</td>
						<td>{{$user->cedula}}</td>
						<td>{{$user->cargo->nombre}}</td>

						<td><a href="{{route('users.show',$user->id)}}"class="btn btn-default"><i class="fas fa-eye"></i></a></td>
						<td><a href="{{route('users.edit',$user->id)}}"class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>
						<td>
							<form action="{{route('users.destroy',$user->id)}}" method='POST'>
								{{csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger"><i class="far fa-trash-alt"></i> </button>
								
							</form>


						</td>

					</tr>
					@endforeach
			</tbody>
		</table>
			{{ $usuarios->render() }}
		</div>
	
	<br>
	<div class="col-sm-4">
		@include('users.fragment.aside')
	</div>

@endsection
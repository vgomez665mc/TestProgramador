@extends('layouts')

@section('content')
<div class="col-sm-8">
	<h2>
		{{$usuario->id}}
		<a href="{{route('users.edit',$usuario->id)}}" class="btn btn-default pull-right"></a>
	</h2>
	
		<h2>{{$usuario->id }}</h2>
		<p>{{ $usuario->nombre }}</p>
		<p>{{ $usuario->correo}}</p>
		<p>{{ $usuario->cedula}}</p>

</div>

	<div class="col-sm-4">
		@include('users.fragment.aside')
	</div>


@endsection


@extends('layouts')

@section('content')
<div class="col-sm-8">
	<h2>
		{{$usuarios->id}}
		<a href="{{route('users.edit',$usuarios->id)}}" class="btn btn-default pull-right"></a>
	</h2>
	<h2>
		{{$usuarios->nombre}}
	</h2>
	<h2>
		{{$usuarios->correo}}
	</h2>
	<h2>
		{{$usuarios->cedula}}
	</h2>
	
</div>

	<div class="col-sm-4">
		@include('users.fragment.aside')
	</div>


@endsection
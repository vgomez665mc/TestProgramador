 @extends('layouts')

@section('content')
<div class="col-sm-8">
	<h2>
		Editar Usuario
		<a href="{{route('users.index')}}" class="btn btn-default pull-right">Listado</a>
	</h2>
		@include('users.fragment.error')

	{!! Form::model($usuarios,['users.update',$usuarios->id,'method'=>'PUT'])!!}
	@include('users.fragment.form')
	{!!Form::close()!!}
</div>



	<div class="col-sm-4">
		@include('users.fragment.aside')
	</div>


@endsection
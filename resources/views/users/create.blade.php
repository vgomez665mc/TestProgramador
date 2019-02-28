 @extends('layouts')

@section('content')
<div class="col-sm-8">
	<h2>
		Nuevo Usuario
		<a href="{{route('users.index')}}" class="btn btn-default pull-right">Listado</a>
	</h2>
		@include('users.fragment.error')
	    @include('users.fragment.form', ['usuario' => $usuario])
</div>



	<div class="col-sm-4">
		@include('users.fragment.aside')
	</div>


@endsection
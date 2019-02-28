<div class="form-group">
	{!!Form::label('nombre','Nombre del usuario') !!}
	{!!Form::text('nombre','',['class' => 'form-control']) !!}


</div>

<div class="form-group">
{!!Form::label('correo','Correo del usuario') !!}
{!!Form::text('correo','',['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!!Form::label('Cedula','Cedula del usuario') !!}
	{!!Form::number('cedula','value',['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
	{!!Form::submit('Enviar',['class' => 'btn btn-primary form-control']) !!}
</div>
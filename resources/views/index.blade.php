<form action="{{route('upload')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="file" name="upload">
	<button type="submit">Enviar</button>
</form> 
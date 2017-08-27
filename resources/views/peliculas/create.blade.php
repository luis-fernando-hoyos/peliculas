@extends ('layouts.nav')

@section ('content')
<div style="background: white;" class="container" >
<div class="row">
<div class="col-md-6">
<form method="POST" action="{{ url('pelculas/store') }}" class="form-has-warning"">

							{{ method_field('POST') }}
							{{ csrf_field() }}				
  <fieldset>
    <div class="container"  >
    <legend class="text-center">Agregar Pelicula</legend>
	</div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Nombre pelicula</label>
      <div class="col-md-10">
        <input type="nombre" class="form-control" id="inputNombre" placeholder="Nombre">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-md-2 control-label">Año de estreno</label>
      <div class="col-md-10">
        <input type="Año" class="form-control" id="inputAño" placeholder="Año de estreno">
      </div>
    </div>
   
    <div class="form-group">
      <label for="inputFile" class="col-md-2 control-label">File</label>

      <div class="col-md-10">
        <input type="text" readonly="" class="form-control" placeholder="Browse...">
        <input type="file" id="inputFile" multiple="">
      </div>
    </div>

    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Descripcion</label>
      <div class="col-md-10">
        <textarea class="form-control" rows="1" id="Descripcion"></textarea>
        <span class="help-block">descripcion de la pelicula maximo 255 caracteres</span>
      </div>
    </div> 

    <div class="form-group">
      <label for="inputSubtitulos" class="col-md-2 control-label">subtitulos</label>
      <div class="col-md-10">
        <input type="subtitulos" class="form-control" id="inputSubtitulos" placeholder="subtitulos">
      </div>
    </div>
</div>

  <br><br><br>
<div class="col-md-6">
    <div class="form-group">
      <label for="inputIdioma" class="col-md-2 control-label">Idioma</label>
      <div class="col-md-10">
        <input type="idioma" class="form-control" id="inputIdioma" placeholder="Idiomas">
      </div>
    </div>


 <div class="form-group">
      <label for="inputIdioma" class="col-md-2 control-label">Calidad</label>
      <div class="col-md-10">
        <input type="idioma" class="form-control" id="inputIdioma" placeholder="Idiomas">
      </div>
 </div>


 <div class="form-group">
      <label for="inputIdioma" class="col-md-2 control-label">Director</label>
      <div class="col-md-10">
        <input type="idioma" class="form-control" id="inputIdioma" placeholder="Idiomas">
      </div>
     </div>

  <div class="form-group">
      <label for="inputIdioma" class="col-md-2 control-label">Genero</label>
      <div class="col-md-10">
        <input type="idioma" class="form-control" id="inputIdioma" placeholder="Idiomas">
      </div>
  </div>

  <div class="form-group">
      <label for="inputIdioma" class="col-md-2 control-label">Calificacion</label>
      <div class="col-md-10">
        <input type="idioma" class="form-control" id="inputIdioma" placeholder="Idiomas">
      </div>
  </div>
</div>
	<div class="col-md-12 text-center">
        <button type="button" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</fieldset>
</form>
</div>
</div>

@endsection 
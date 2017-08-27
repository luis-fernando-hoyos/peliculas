@extends ('layouts.nav')

@section ('content')
<div style="background: white;" class="container" >
<div class="row">
<div class="col-md-6">
<form method="POST" action="{{ route('peliculas.store') }}" class="form-has-warning"">

							{{ method_field('POST') }}
							{{ csrf_field() }}				
  <fieldset>
    <div class="container"  >
    <legend class="text-center">Agregar Pelicula</legend>
	</div>

    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Nombre pelicula</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
      </div>
    </div>
  <br><br>
      <div class="form-group">
      <label for="inputYear_est" class="col-md-2 control-label">Año de estreno</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name= "year_est" placeholder="Año de estreno">
      </div>
    </div>
<br><br>
    <div class="form-group">
      <label for="inputFile" class="col-md-2 control-label">File</label>

      <div class="col-md-10">
        <input type="text" readonly="" class="form-control" placeholder="Browse...">
        <input type="file" id="inputFile" multiple="">
      </div>
    </div>
 
<br><br>

    <div class="form-group">
      <label for="inputSipnosis" class="col-md-2 control-label">Sipnosis</label>
      <div class="col-md-10">
      <input type="text" class="form-control" name="sipnosis"  placeholder="Sipnosis">
      </div>
    </div> 

<br><br>
<div class="form-group">
    <div class="form-group">
      <label for="inputIdioma" class="col-md-2 control-label">Idioma</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="idioma"  placeholder="Idiomas">
      </div>
    </div>

<br><br>
 <div class="form-group">
      <label for="inputCalidad" class="col-md-2 control-label">Calidad</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="calidad_cal" id="inputIdioma" placeholder="Calidad">
      </div>
 </div>


  <br><br>

 <div class="form-group">
      <label for="inputDirector" class="col-md-2 control-label">Director</label>
      <div class="col-md-10">
        <input type="" class="form-control" name="director"  placeholder="Director">
      </div>
     </div>

<br><br>

  <div class="form-group">
      <label for="inputCalificacion" class="col-md-2 control-label">Calificacion</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="calificacion_clf" placeholder="Calificacion">
      </div>
  </div>
</div>


<br><br>
  <div class="form-group">
      <label for="inputGenero" class="col-md-2 control-label">Genero</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="genero_gen"  placeholder="Genero">
      </div>
  </div>
  <br><br>
 
<div class="form-group">
      <label for="inputCategoria" class="col-md-2 control-label">Categorias</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="categoria_cat"  placeholder="Categorias">
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
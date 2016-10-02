@if(session()->has('msg'))
    <div class="alert alert-success" role="alert">
    <strong>Guardado</strong> {{ session('msg') }} </div>
@endif


@if(session()->has('msgs'))
    <div class="alert alert-danger" role="alert">
  <strong>Error</strong> No se logro crear la credencial </div>
@endif


<form role="form" method="POST" action="{{ url('credenciales') }}" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" name="nombre" placeholder="Ingresa Nombre completo">
      @if($errors->has('nombre'))
        <span style="color:red;">{{ $errors->first('nombre') }}</span>
      @endif
    
  </div>

   <div class="form-group">
      <label for="puesto">Puesto:</label>
      <input type="text" class="form-control" name="puesto" placeholder="Ingresa Puesto">
    
      @if($errors->has('puesto'))
        <span style="color:red;">{{ $errors->first('puesto') }}</span>
      @endif
  </div>

   <div class="form-group">
      <label for="foto">Foto</label>
      <input type="file" class="form-control" name="foto" placeholder="Ingresa Foto">
    

     
  </div>
  
  
  
  
  
  
  
  <button type="submit" class="btn btn-primary">Crear Miembro</button>
</form>
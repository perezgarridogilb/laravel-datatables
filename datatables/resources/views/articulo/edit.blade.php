@extends('layouts.plantilabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}">
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Cantidad</label>
          <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" value="{{$articulo->cantidad}}">
      </div>
      <div class="mb-3">
          <label for="" class="form-label">Precio</label>
          <input id="precio" name="precio" type="number" step="any"  class="form-control" tabindex="4" value="{{$articulo->precio}}">
      </div>
      <a href="{{ url('articulos') }}" type="submit" class="btn btn-secondary" tabindex="5">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection
@extends('plantilla.admin')

@section('contenido')
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h1 class="card-title">Crear Categoria</h1>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    
    
    <div id="api">
        <form action="" method="get">
            <h1>Crear Categoria</h1>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input 
                  @blur = "getCategory"
                  @focus = "aparecerSlug = false" 
                class="form-control" type="text" id="nombre" v-model="nombre">
                <label for="slug">Slug</label>
                <input readonly class="form-control" type="text" id="slug" v-model="generarSlug">
                <br>
                <div v-if="aparecerSlug" :class="classSlug">
                    @{{mensajeSlug}}
                </div>
                <div v-if="aparecerSlug" ></div>
                <label for="descrip">Descripcion</label>
                <textarea v-model="descripcion" class="form-control" name="descrip" id="descrip" cols="30" rows="5"></textarea>
            </div>
            <input :disabled="btnGuardar" type="submit" value="Guardar" class="btn btn-primary float-right">
        </form>

        <br><br>
        @{{nombre}}  |  @{{descripcion}}

    </div>
    
    
</div>
<!-- /.card-body -->
<div class="card-footer">
    <input :disabled="btnGuardar" type="submit" value="Guardar" class="btn btn-primary float-right">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection
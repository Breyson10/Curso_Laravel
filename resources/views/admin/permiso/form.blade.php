<div class="form-group">
        <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
        <div class="col-lg-8">
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
        </div>
    </div>
    <div class="form-group">
        <label for="slug" class="col-lg-3 control-label requerido">slug</label>
        <div class="col-lg-8">
        <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug', $data->slug ?? '')}}" required/>
        </div>
    </div>
    
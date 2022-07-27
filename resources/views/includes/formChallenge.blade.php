@csrf
<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <label for="name">Nombre del desafio</label>
            <input id="name" type="text" placeholder="Nombre del desafio" class="form-control @error('  Nombre del desafio') is-invalid @enderror"
                name="name" value="{{ old('name', $challenge->Nombre_del_desafio ) }}"  autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="privacity">Area</label>
                <select class="custom-select rounded-0" name="privacity" id="privacity">
                    <option >--Seleccionar--</option>
                    @foreach ($areas as $area)
                        <option {{ $area->id == $challenge->area_id ? 'selected' : '' }} value="{{$area->id}}" >{{ $area->name . "-" . $area->description }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    
    

    <div class="row">
        <div class="form-group col-md-6">
            <label for="description">Descripcion</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description', $challenge->description ) }}"  autocomplete="description" autofocus>
                {{ old('description', $challenge->description ) }}
            </textarea>

                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>    
                
          <div class="form-group col-md-6">
            <label for="ubicacion">Ubicacion</label>
            <input id="ubicacion" type="text" placeholder="Ubicacion" class="form-control @error('ubicacion') is-invalid @enderror"
                name="ubicacion" value="{{ old('ubicacion', $challenge->ubicacion ) }}"  autocomplete="ubicacion" autofocus>

                @error('ubicacion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            {{-- <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" value="inactivo" id="status" name="status" >
                <label for="customRadio2" class="custom-control-label">inactivo</label>
            </div> --}}
        </div>
        <div class="form-group col-md-6">
            <label for="nempresario">Nombre del Empresario</label>
            <input id="nempresario" type="text" placeholder="Nombre del Empresario" class="form-control @error('  Nombre del Empresario') is-invalid @enderror"
                name="nempresario" value="{{ old('nempresario', $challenge->nempresario) }}"  autocomplete="nempresario" autofocus>

                @error('nempresario')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

    </div>

        <div class="form-group col-md-6">
            <label for="nempresa">Nombre de la Empresa</label>
            <input id="nempresa" type="text" placeholder="Nombre de la Empresa" class="form-control @error('Nombre de la Empresa') is-invalid @enderror"
                name="nempresa" value="{{ old('nempresa', $challenge->nempresa ) }}"  autocomplete="nempresa" autofocus>

                @error('nempresa')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

        <div class="form-group col-md-6">
            <label for="status">Estado del Desafio</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" value="activo" id="status" name="status" checked>
                <label for="customRadio1" class="custom-control-label">Activo</label>
            </div>  
                </div>


    </div>
    @include('includes.showUploads', ['model' => $challenge, 'disk' => 'challenge'])
    <div class="row" style="clear: both;margin-top: 18px;">
        <label for="">Nota: Solo puedes subir 4 archivos, 3 para material de apoyo y 1 para añadir preguntas que quieras adicionar.</label>
        
         <br/>
         @if (isset($uploads))
            <p>-puedes subir {{ $uploads ? 4 - count($uploads)  : '4' }}-</p>
         @else
         @endif
         
        <div class="col-12">
          <div class="dropzone" id="myDropzone"></div>
        </div>
    </div>

</div>


{{-- Formulario que tendra los datos en comun con create y edit --}}
<h1 class="fw-bold my-4">{{ $modo }} empleado</h1>

@if (count($errors) > 0)

  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>



@endif

<div class="form-group">
  <label class="form-label" for="Nombre">Nombre</label>
  <input class="form-control" type="text" name="Nombre"
    id="Nombre"
    value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}">
</div>

<div class="form-group">

  <label class="form-label" for="ApellidoPaterno">Apellido
    Paterno</label>
  <input class="form-control" type="text"
    name="ApellidoPaterno" id="ApellidoPaterno"
    value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : '' }}">
</div>


<div class="form-group">

  <label class="form-label" for="ApellidoMaterno">Apellido
    Materno</label>
  <input class="form-control" type="text"
    name="ApellidoMaterno" id="ApellidoMaterno"
    value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}">
</div>

<div class="form-group">

  <label class="form-label" for="Correo">Correo</label>
  <input class="form-control" type="text" name="Correo"
    id="Correo"
    value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}">
</div>

<div class="form-group">

  <label class="form-label" for="Foto">Foto</label>
  @if (@isset($empleado->Foto))
    <img src="{{ asset('storage') . '/' . $empleado->Foto }}"
      alt="Imagen" />
  @endif

  <input class="form-control" type="file" name="Foto"
    id="Foto" value="">
</div>

<div class="d-flex flex-row-reverse mt-4">
  <input class="btn btn-info ms-2" type="submit"
    value="{{ $modo }} datos">

  <a class="btn btn-light"
    href="{{ route('empleado.index') }}">Regresar</a>

</div>

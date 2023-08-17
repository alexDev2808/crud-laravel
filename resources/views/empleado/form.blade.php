{{-- Formulario que tendra los datos en comun con create y edit --}}
<h1>{{ $modo }} empleado</h1>

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}">

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : '' }}">

<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}">

<label for="Correo">Correo</label>
<input type="text" name="Correo" id="Correo" value="{{ isset($empleado->Correo) ? $empleado->Correo : '' }}">

<label for="Foto">Foto</label>
@if (@isset($empleado->Foto))
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="Imagen" />
@endif

<input type="file" name="Foto" id="Foto" value="">

<input type="submit" value="{{ $modo }} datos">

<a href="{{ route('empleado.index') }}">Regresar</a>

{{-- Formulario que tendra los datos en comun con create y edit --}}

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}">

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}">

<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}">

<label for="Correo">Correo</label>
<input type="text" name="Correo" id="Correo" value="{{ $empleado->Correo }}">

<label for="Foto">Foto</label>
{{ $empleado->Foto }}
<input type="file" name="Foto" id="Foto" value="">

<input type="submit" value="GuardarDatos">

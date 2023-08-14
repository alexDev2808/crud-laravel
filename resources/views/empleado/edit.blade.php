{{-- Formulario de edicion de empleado --}}

<p>Editar</p>
<form action="{{ route('empleado.update', $empleado->id) }}"
  method="post" enctype="multipart/form-data">
  @csrf
  @method('PATCH')

  @include('empleado.form')

</form>

{{-- Formulario de creacion de empleado --}}

<form action="{{ route('empleado.store') }}" method="post"
  enctype="multipart/form-data">
  @csrf

  @include('empleado.form', ['modo'=>'Crear']);

</form>

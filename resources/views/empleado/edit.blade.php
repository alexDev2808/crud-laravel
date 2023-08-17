{{-- Formulario de edicion de empleado --}}
@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="{{ route('empleado.update', $empleado->id) }}"
      method="post" enctype="multipart/form-data">
      @csrf
      @method('PATCH')

      @include('empleado.form', [
          'modo' => 'Editar',
      ]);

    </form>
  </div>
@endsection

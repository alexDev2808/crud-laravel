{{-- Formulario de creacion de empleado --}}

@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="{{ route('empleado.store') }}" method="post"
      enctype="multipart/form-data">
      @csrf

      @include('empleado.form', ['modo' => 'Crear'])

    </form>
  </div>
@endsection

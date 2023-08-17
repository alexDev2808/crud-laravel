{{-- Mostrar lista de empleados --}}
@extends('layouts.app')

@section('content')
  <div class="container">

    @if (Session::has('mensaje'))
      {{ Session::get('mensaje') }}
    @endif

    <a href="{{ route('empleado.create') }}"
      class="btn btn-success mb-4">Registar nuevo
      empleado</a>
    <div class="table-responsive-md">
      <table
        class="table table-striped
    table-hover	
    table-borderless
    table-dark
    align-middle">
        <thead>
          <caption>Contactos</caption>
          <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($empleados as $empleado)
            <tr class="table-dark">
              <td>{{ $empleado->id }}</td>
              <td>
                <img class="img-thumbnail img-fluid"
                  src="{{ asset('storage') . '/' . $empleado->Foto }}"
                  alt="Imagen" />
              </td>
              <td>{{ $empleado->Nombre }}</td>
              <td>{{ $empleado->ApellidoPaterno }}</td>
              <td>{{ $empleado->ApellidoMaterno }}</td>
              <td>{{ $empleado->Correo }}</td>
              <td>

                <a href="{{ route('empleado.edit', $empleado->id) }}"
                  class="btn btn-warning my-2">Editar</a>

                <form
                  action="{{ route('empleado.destroy', $empleado->id) }}"
                  class="d-inline" method="POST">
                  @csrf
                  @method('DELETE')
                  {{-- {{ method_field('DELETE') }} --}}
                  <input type="submit" value="Borrar"
                    class="btn btn-danger"
                    onclick="return confirm('Quieres borrar?')">
                </form>

              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          
        </tfoot>
      </table>
    </div>
  </div>
@endsection

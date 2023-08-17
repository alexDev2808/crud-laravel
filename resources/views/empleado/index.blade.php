{{-- Mostrar lista de empleados --}}
@extends('layouts.app')

@section('content')
  <div class="container">

    @if (Session::has('mensaje'))
      {{ Session::get('mensaje') }}
    @endif

    <a href="{{ route('empleado.create') }}">Registar nuevo
      empleado</a>
    <div class="table-responsive-md">
      <table
        class="table table-striped
    table-hover	
    table-borderless
    table-light
    align-middle">
        <thead class="table-light">
          <caption>Table Name</caption>
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
            <tr class="table-primary">
              <td>{{ $empleado->id }}</td>
              <td>
                <img
                  src="{{ asset('storage') . '/' . $empleado->Foto }}"
                  alt="Imagen" />
              </td>
              <td>{{ $empleado->Nombre }}</td>
              <td>{{ $empleado->ApellidoPaterno }}</td>
              <td>{{ $empleado->ApellidoMaterno }}</td>
              <td>{{ $empleado->Correo }}</td>
              <td>

                <a
                  href="{{ route('empleado.edit', $empleado->id) }}">Editar</a>

                |

                <form
                  action="{{ route('empleado.destroy', $empleado->id) }}"
                  method="POST">
                  @csrf
                  @method('DELETE')
                  {{-- {{ method_field('DELETE') }} --}}
                  <input type="submit" value="Borrar"
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

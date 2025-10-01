@extends('admin.layouds.main')

@section('contenido')
<div class="d-flex justify-content-between mb-3">
    <h1>Planos</h1>
    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Plano
        </button>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
        </ul>
    </div>
@endif

<div class="p-4">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Id-Módulo</th>
                <th>Nombre Plano</th>
                <th>Archivo Plano</th>
                <th>Versión</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($planos as $item)
                <tr>
                    <td>{{ $item->Id }}</td>
                    <td>{{ $item->id_modulo }}</td>
                    <td>{{ $item->nombre_plano }}</td>
                    <td>
                        @if($item->archivo_plano)
                            <a href="{{ asset('storage/' . $item->archivo_plano) }}" target="_blank" class="btn btn-sm btn-info">Ver</a>
                        @endif
                    </td>
                    <td>{{ $item->version }}</td>
                    <td>{{ $item->id_user }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- 🚀 Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Plano</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('planos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-floating mb-3">
            <input type="number" class="form-control" name="id_modulo" placeholder="ID del módulo" required>
            <label>ID Módulo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombre_plano" placeholder="Nombre del plano" required>
            <label>Nombre Plano</label>
          </div>
          <div class="form-floating mb-3">
            <input type="file" class="form-control" name="archivo_plano" required>
            <label>Archivo Plano</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="version" placeholder="Versión" required>
            <label>Versión</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" name="id_user" placeholder="ID Usuario" required>
            <label>ID Usuario</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

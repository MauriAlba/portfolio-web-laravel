@extends('admin.layouts.app')

@section('title', 'Educación')
@section('header', 'Gestión de Educación')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Listado de Estudios</h5>
        <a href="{{ route('educaciones.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Nueva Educación
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Institución</th>
                        <th>Título</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th width="150">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educaciones as $educacion)
                    <tr>
                        <td>{{ $educacion->institucion }}</td>
                        <td>{{ $educacion->titulo }}</td>
                        <td>{{ $educacion->fecha_inicio }}</td>
                        <td>{{ $educacion->fecha_fin ?? 'Actualidad' }}</td>
                        <td>
                            <a href="{{ route('educaciones.edit', $educacion) }}" 
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('educaciones.destroy', $educacion) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('¿Eliminar este estudio?')">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


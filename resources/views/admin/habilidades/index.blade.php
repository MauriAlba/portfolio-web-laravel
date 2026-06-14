@extends('admin.layouts.app')

@section('title', 'Habilidades')
@section('header', 'Gestión de Habilidades')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Listado de Habilidades</h5>
        <a href="{{ route('habilidades.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Nueva Habilidad
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Habilidad</th>
                        <th width="200">Porcentaje</th>
                        <th width="150">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($habilidades as $habilidad)
                    <tr>
                        <td>{{ $habilidad->nombre }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="me-2">{{ $habilidad->porcentaje }}%</span>
                                <div class="progress flex-grow-1" style="height: 10px;">
                                    <div class="progress-bar bg-info" 
                                         style="width: {{ $habilidad->porcentaje }}%"
                                         role="progressbar"></div>
                                </div>
                            </div>
                         </td>
                        <td>
                            <a href="{{ route('habilidades.edit', $habilidad) }}" 
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('habilidades.destroy', $habilidad) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('¿Eliminar esta habilidad?')">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                         </td>
                     </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay habilidades registradas</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
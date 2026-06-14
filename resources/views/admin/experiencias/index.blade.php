@extends('admin.layouts.app')

@section('title', 'Experiencias')
@section('header', 'Gestión de Experiencias Laborales')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Listado de Experiencias</h5>
        <a href="{{ route('experiencias.create') }}" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Nueva Experiencia
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Empresa</th>
                        <th>Puesto</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                        <th width="150">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($experiencias as $experiencia)
                    <tr>
                        <td>{{ $experiencia->empresa }}</td>
                        <td>{{ $experiencia->puesto }}</td>
                        <td>{{ $experiencia->fecha_inicio }}</td>
                        <td>{{ $experiencia->fecha_fin ?? 'Actualidad' }}</td>
                        <td>
                            <a href="{{ route('experiencias.edit', $experiencia) }}" 
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Editar
                            </a>
                            <form action="{{ route('experiencias.destroy', $experiencia) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" 
                                        onclick="return confirm('¿Eliminar esta experiencia?')">
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


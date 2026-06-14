@extends('admin.layouts.app')

@section('title', 'Editar Experiencia')
@section('header', 'Editar Experiencia Laboral')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('experiencias.update', $experiencia) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Empresa *</label>
                <input type="text" name="empresa" class="form-control @error('empresa') is-invalid @enderror" 
                       value="{{ old('empresa', $experiencia->empresa) }}" required>
                @error('empresa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Puesto *</label>
                <input type="text" name="puesto" class="form-control @error('puesto') is-invalid @enderror" 
                       value="{{ old('puesto', $experiencia->puesto) }}" required>
                @error('puesto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ old('descripcion', $experiencia->descripcion) }}</textarea>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Fecha Inicio *</label>
                        <input type="date" name="fecha_inicio" class="form-control @error('fecha_inicio') is-invalid @enderror" 
                               value="{{ old('fecha_inicio', $experiencia->fecha_inicio) }}" required>
                        @error('fecha_inicio')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Fecha Fin</label>
                        <input type="date" name="fecha_fin" class="form-control" 
                               value="{{ old('fecha_fin', $experiencia->fecha_fin) }}">
                        <small class="text-muted">Dejar vacío si es trabajo actual</small>
                    </div>
                </div>
            </div>
            
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-update"></i> Actualizar
                </button>
                <a href="{{ route('experiencias.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection


@extends('admin.layouts.app')

@section('title', 'Nueva Habilidad')
@section('header', 'Agregar Habilidad')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('habilidades.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Nombre de la Habilidad *</label>
                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" 
                       value="{{ old('nombre') }}" required>
                @error('nombre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Porcentaje * (0-100)</label>
                <input type="number" name="porcentaje" class="form-control @error('porcentaje') is-invalid @enderror" 
                       value="{{ old('porcentaje', 0) }}" min="0" max="100" required>
                <small class="text-muted">Ej: 85 para 85%</small>
                @error('porcentaje')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Guardar
                </button>
                <a href="{{ route('habilidades.index') }}" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
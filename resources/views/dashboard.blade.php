@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('header', 'Panel de Administración')

@section('content')
<div class="row">
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card card-stats bg-primary text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Experiencias</h6>
                        <h3 class="mt-2 mb-0">{{ \App\Models\Experiencia::count() }}</h3>
                    </div>
                    <i class="fas fa-briefcase fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card card-stats bg-success text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Educación</h6>
                        <h3 class="mt-2 mb-0">{{ \App\Models\Educacion::count() }}</h3>
                    </div>
                    <i class="fas fa-graduation-cap fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card card-stats bg-info text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Habilidades</h6>
                        <h3 class="mt-2 mb-0">{{ \App\Models\Habilidad::count() }}</h3>
                    </div>
                    <i class="fas fa-chart-line fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3 mb-4">
        <div class="card card-stats bg-warning text-white">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Proyectos</h6>
                        <h3 class="mt-2 mb-0">0</h3>
                    </div>
                    <i class="fas fa-project-diagram fa-3x opacity-50"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5>Accesos Rápidos</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-2">
                        <a href="{{ route('experiencias.index') }}" class="btn btn-outline-primary w-100">
                            <i class="fas fa-briefcase"></i> Experiencias
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="{{ route('educaciones.index') }}" class="btn btn-outline-success w-100">
                            <i class="fas fa-graduation-cap"></i> Educación
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="{{ route('habilidades.index') }}" class="btn btn-outline-info w-100">
                            <i class="fas fa-chart-line"></i> Habilidades
                        </a>
                    </div>
                    <div class="col-md-3 mb-2">
                        <a href="#" class="btn btn-outline-warning w-100">
                            <i class="fas fa-project-diagram"></i> Proyectos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




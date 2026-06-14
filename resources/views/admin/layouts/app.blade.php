<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title', 'Portfolio Web')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome 6 (iconos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- <style>
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.9);
            padding: 12px 20px;
            margin: 5px 0;
            border-radius: 10px;
            transition: all 0.3s;
        }
        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.2);
            color: white;
            transform: translateX(5px);
        }
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.3);
            color: white;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
        }
        .main-content {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .navbar-top {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card-stats {
            transition: transform 0.3s;
        }
        .card-stats:hover {
            transform: translateY(-5px);
        }
    </style> -->

    <!-- Si quieres usar Tailwind CSS, puedes incluirlo aquí -->
    {{-- Vite carga el CSS compilado de Tailwind --}}
    @vite(['resources/css/app.css'])
    
    {{-- Para estilos adicionales específicos --}}
    @stack('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0">
                <div class="sidebar">
                    <div class="text-center py-4">
                        <i class="fas fa-code fa-3x text-white"></i>
                        <h4 class="text-white mt-2">Admin Panel</h4>
                        <p class="text-white-50 small">Portfolio Web</p>
                    </div>
                    
                    <nav class="nav flex-column px-3">
                        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" 
                           href="{{ route('dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                        
                        <a class="nav-link {{ request()->routeIs('experiencias.*') ? 'active' : '' }}" 
                           href="{{ route('experiencias.index') }}">
                            <i class="fas fa-briefcase"></i> Experiencias
                        </a>
                        
                        <a class="nav-link {{ request()->routeIs('educaciones.*') ? 'active' : '' }}" 
                           href="{{ route('educaciones.index') }}">
                            <i class="fas fa-graduation-cap"></i> Educación
                        </a>
                        
                        <a class="nav-link {{ request()->routeIs('habilidades.*') ? 'active' : '' }}" 
                            href="{{ route('habilidades.index') }}">
                            <i class="fas fa-chart-line"></i> Habilidades
                        </a>
                        
                        <a class="nav-link" href="#">
                            <i class="fas fa-project-diagram"></i> Proyectos
                        </a>
                        
                        <hr class="bg-light my-3">
                        
                        <a class="nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}" 
                           href="{{ route('profile.edit') }}">
                            <i class="fas fa-user-circle"></i> Mi Perfil
                        </a>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link w-100 text-start" style="border: none; background: none;">
                                <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                            </button>
                        </form>
                    </nav>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <!-- Top Navbar -->
                <div class="navbar-top px-4 py-3 mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            @yield('header')
                        </h5>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user"></i> {{ Auth::user()->name ?? 'Admin' }}
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                        <i class="fas fa-user-cog"></i> Mi Perfil
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="px-4 pb-4">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
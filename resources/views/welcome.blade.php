<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Facturación e Inventarios</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">I.E.S.T.P. Pedro P. Díaz</a>
            <div class="ms-auto">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-light btn-sm">Panel</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm me-2">Iniciar Sesión</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Registrarse</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container my-5">
        <div class="p-5 mb-4 bg-white rounded-4 shadow-sm border text-center">
            <h1 class="display-5 fw-bold text-dark mb-3">Sistema de Facturación y Control de Inventarios</h1>
            <p class="lead text-secondary mx-auto" style="max-width: 800px;">
                Aplicación web empresarial desarrollada para la gestión integral de almacenes, control de stock, registro de clientes, proveedores y emisión automatizada de facturas.
            </p>
            <hr class="my-4">
            <div class="row text-start mt-4 g-4">
                <div class="col-md-4">
                    <div class="p-3 border bg-light rounded-3 h-100">
                        <h5 class="fw-bold text-primary">1. Gestión de Registros</h5>
                        <p class="text-muted small mb-0">Control y almacenamiento de datos de clientes, artículos y proveedores de la empresa.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 border bg-light rounded-3 h-100">
                        <h5 class="fw-bold text-primary">2. Control de Inventarios</h5>
                        <p class="text-muted small mb-0">Actualización en tiempo real del stock de artículos en bodega para mantener la precisión[cite: 1].</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 border bg-light rounded-3 h-100">
                        <h5 class="fw-bold text-primary">3. Facturación</h5>
                        <p class="text-muted small mb-0">Generación de facturas con cálculo automático de cantidades, subtotales e impuestos[cite: 1].</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
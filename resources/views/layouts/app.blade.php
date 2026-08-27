<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    @if ($admin ?? false)
        <div class="container-fluid min-vh-100 bg-light">
            <div class="row min-vh-100">
                <div class="col-12 col-md-3 col-lg-2 bg-dark text-white p-3">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <i class="bi bi-shop text-danger fs-4"></i>
                        <span class="fw-bold">Lanchonete SENAI</span>
                    </div>

                    <nav class="nav nav-pills flex-column gap-2">
                        <a href="" class="nav-link text-white">
                            <i class="bi bi-speedometer2 me-2"></i>
                            Dashboard
                        </a>

                        <a href="" class="nav-link text-white">
                            <i class="bi bi-people me-2"></i>
                            Administradores
                        </a>

                        <a href="" class="nav-link text-white">
                            <i class="bi bi-tags me-2"></i>
                            Categorias
                        </a>

                        <a href="" class="nav-link text-white">
                            <i class="bi bi-basket me-2"></i>
                            Produtos
                        </a>
                    </nav>

                    <div class="mt-4 pt-4 border-top border-secondary">
                        <form>
                            <button type="submit" class="btn btn-outline-light w-100">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Sair</button>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-9 col-lg-10 p-0">
                    <nav class="navbar bg-white border-bottom px-3 px-md-4">
                        <div class="container-fluid p-0">
                            <span class="navbar-brand mb-0 h1">Título</span>

                            <div class="d-flex align-items-center gap-2 text-secondary">
                                <i class="bi bi-person-circle"></i>
                                <span>{{ auth()->user()->nome }}</span>
                                <span class="badge text-bg-light">Administrador</span>
                            </div>
                        </div>
                    </nav>

                <main class="p-3 p-md-4">
                    {{ $slot }}
                </main>
            </div>
        </div>
        </div>
    @else
        {{ $slot }}
    @endif
    @livewireScripts
</body>

</html>

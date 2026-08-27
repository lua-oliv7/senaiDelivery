<div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ seccess('success') }}
            <button type="button" class="bt-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
        </div>
    @endif

    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card bg-white shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-secondary m-1">Total de Administradores</p>
                    <h2 class="h3 mb-0">{{ $totalAdministradores }}</h2>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card bg-white shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-secondary m-1">Total de Clientes</p>
                    <h2 class="h3 mb-0">{{ $totalClientes }}</h2>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card bg-white shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-secondary m-1">Total de Categorias</p>
                    <h2 class="h3 mb-0">{{ $totalCategorias }}</h2>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card bg-white shadow-sm border-0 h-100">
                <div class="card-body">
                    <p class="text-secondary m-1">Total de Produtos</p>
                    <h2 class="h3 mb-0">{{ $totalProdutos }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-white shadow-sm border-0">
        <div class="card-header bg-white">
            <h2 class="h5 mb-0">
                Últimos Produtos Cadastrados
            </h2>
        </div>

        <div class="card-body">
            @if ($ultimosProdutos->isEmpty())
                <p class="text-secondary mb-0">
                    Nenhuma produto cadastrado
                </p>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Status</th>
                                <th>Destaque</th>
                                <th>Cadastrado em</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ultimosProdutos as $produto)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->categoria->nome }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col">
                <h1 class="display-5">Olá, {{ auth()->user()->nome }}! 🍕</h1>
                <p class="lead text-muted">Bem-vindo ao sistema de gestão da pizzaria.</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-danger shadow-sm">
                    <div class="card-body text-center">
                        <div class="display-3 mb-3">📋</div>
                        <h3 class="card-title">Cadastro de Produtos</h3>
                        <p class="card-text">Gerencie o cardápio, adicione novas pizzas e edite preços.</p>
                        <a href="{{ route('produtos.cadastro') }}" class="btn btn-danger btn-lg w-100">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 border-danger shadow-sm">
                    <div class="card-body text-center">
                        <div class="display-3 mb-3">📦</div>
                        <h3 class="card-title">Gestão de Estoque</h3>
                        <p class="card-text">Registre entradas, saídas e acompanhe os níveis de estoque.</p>
                        <a href="{{ route('estoque.gestao') }}" class="btn btn-danger btn-lg w-100">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

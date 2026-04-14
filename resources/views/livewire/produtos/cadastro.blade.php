<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Gerenciar Cardápio</h2>
            <a href="{{ route('principal') }}" class="btn btn-outline-secondary btn-sm">Voltar</a>
        </div>

        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="mb-3">{{ $produto_id ? 'Editar Produto' : 'Novo Produto' }}</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" wire:model="nome" class="form-control" placeholder="Nome da Pizza">
                    </div>
                    <div class="col-md-3">
                        <input type="number" wire:model="preco" class="form-control" placeholder="Preço (Ex: 45.00)">
                    </div>
                    <div class="col-md-3">
                        <input type="number" wire:model="estoque_minimo" class="form-control"
                            placeholder="Estoque Mínimo">
                    </div>
                    <div class="col-md-2">
                        <button wire:click="salvar" class="btn btn-success w-100">Salvar</button>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="text-danger mt-2 small">Preencha todos os campos corretamente.</div>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <input type="text" wire:model.live="busca" class="form-control"
                placeholder="🔍 Buscar por nome do produto...">
        </div>

        <div class="table-responsive">
            <table class="table table-hover bg-white border">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Mínimo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $p)
                        <tr>
                            <td>{{ $p->nome }}</td>
                            <td>R$ {{ number_format($p->preco, 2, ',', '.') }}</td>
                            <td>{{ $p->estoque_minimo }}</td>
                            <td>
                                <button wire:click="editar({{ $p->id }})"
                                    class="btn btn-sm btn-primary">Editar</button>
                                <button wire:click="excluir({{ $p->id }})"
                                    class="btn btn-sm btn-danger">Excluir</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

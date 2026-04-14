<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Gestão de Estoque</h2>
            <a href="{{ route('principal') }}" class="btn btn-outline-secondary btn-sm">Voltar</a>
        </div>

        @if (session()->has('alerta'))
            <div class="alert alert-warning border-start border-4 border-warning shadow-sm">
                ⚠️ {{ session('alerta') }}
            </div>
        @endif

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5 class="mb-3">Registrar Entrada ou Saída</h5>
                <div class="row g-3">
                    <div class="col-md-4">
                        <select wire:model="produto_id" class="form-select">
                            <option value="">Selecione o Produto</option>
                            @foreach ($produtos as $p)
                                <option value="{{ $p->id }}">{{ $p->nome }} (Atual: {{ $p->estoque_atual }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select wire:model="tipo" class="form-select">
                            <option value="">Tipo</option>
                            <option value="entrada">Entrada</option>
                            <option value="saída">Saída</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="number" wire:model="quantidade" class="form-control" placeholder="Qtd">
                    </div>
                    <div class="col-md-2">
                        <input type="date" wire:model="data" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <button wire:click="registrarMovimentacao" class="btn btn-danger w-100">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

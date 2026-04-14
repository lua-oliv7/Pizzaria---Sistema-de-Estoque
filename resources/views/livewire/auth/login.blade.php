<div>
    <script src="https://cdn.tailwindcss.com"></script>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card shadow" style="width: 24rem;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Acesso ao Sistema</h3>

                <form wire:submit.prevent="login">
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" wire:model="email" class="form-control" required shadow-none>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" wire:model="senha" class="form-control" required shadow-none>
                    </div>

                    @if (session()->has('erro'))
                        <div class="alert alert-danger py-2 text-sm">{{ session('erro') }}</div>
                    @endif

                    <button type="submit" class="btn btn-danger w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

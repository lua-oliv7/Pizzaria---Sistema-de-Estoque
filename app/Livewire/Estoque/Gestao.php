<?php

namespace App\Livewire\Estoque;

use App\Models\Movimentacao;
use App\Models\Produto;
use Livewire\Component;

class Gestao extends Component
{
    public $produto_id, $tipo, $quantidade, $data;

    public function registrarMovimentacao()
    {
        $this->validate([
            'produto_id' => 'required',
            'tipo' => 'required',
            'quantidade' => 'required|numeric',
            'data' => 'required'
        ]);

        $produto = Produto::find($this->produto_id);

        if ($this->tipo == 'entrada') {
            $produto->increment('estoque_atual', $this->quantidade);
        } else {
            $produto->decrement('estoque_atual', $this->quantidade);

            if ($produto->estoque_atual < $produto->estoque_minimo) {
                session()->flash('alerta', "Atenção! Estoque de {$produto->nome} está abaixo do mínimo.");
            }
        }

        Movimentacao::create([
            'usuario_id' => auth()->id(),
            'produto_id' => $this->produto_id,
            'tipo' => $this->tipo,
            'quantidade' => $this->quantidade,
            'data_movimentacao' => $this->data
        ]);
    }

    public function render()
    {
        return view('livewire.estoque.gestao');
    }
}

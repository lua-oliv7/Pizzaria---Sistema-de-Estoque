<?php

namespace App\Livewire\Produtos;

use App\Models\Produto;
use Livewire\Component;

class Cadastro extends Component
{
    public $busca = '';
    public $nome, $preco, $estoque_minimo, $produto_id;

    public function salvar()
    {
        // Item 6.1.6: Validação com alertas
        $dados = $this->validate([
            'nome' => 'required|min:3',
            'preco' => 'required|numeric',
            'estoque_minimo' => 'required|integer'
        ]);

        Produto::updateOrCreate(['id' => $this->produto_id], $dados);
        session()->flash('mensagem', 'Produto salvo com sucesso!');
        $this->limpar();
    }

    public function excluir($id)
    {
        Produto::find($id)->delete(); // Item 6.1.5
    }

    public function render()
    {
        return view('livewire.produtos.cadastro');
    }
}

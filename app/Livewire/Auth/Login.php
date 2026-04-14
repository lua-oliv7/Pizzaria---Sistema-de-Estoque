<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $senha;

    public function login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->senha])) {
            return redirect()->route('principal');
        }
        session()->flash('erro', 'E-mail ou senha inválidos.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;
use App\Livewire\Principal;
use App\Livewire\Produtos\Cadastro;
use App\Livewire\Estoque\Gestao;

Route::get('/login', Login::class)->name('login');

Route::get('/', Principal::class)->name('principal');

Route::get('/produtos', Cadastro::class)->name('produtos.cadastro');

Route::get('/estoque', Gestao::class)->name('estoque.gestao');

Route::post('/logout', function () {
    auth()->logout();
    return redirect()->route('login');
})->name('logout');
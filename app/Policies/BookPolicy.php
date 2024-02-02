<?php

namespace App\Policies;

use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookPolicy
{

    public function viewAny(): bool
    {
        //
    }


    public function view(): bool
    {
        return Auth::user()->role->hasPermission('registro-visualizar');
    }


    public function create(): bool
    {
        return Auth::user()->role->hasPermission('registro-cadastrar');
    }


    public function update(): bool
    {
        return Auth::user()->role->hasPermission('registro-editar');
    }


    public function delete(): bool
    {
        return Auth::user()->role->hasPermission('registro-excluir');
    }


    public function research(): bool
    {
        return Auth::user()->role->hasPermission('pesquisa-visualizar');
    }

    public function research_unit(): bool
    {
        return Auth::user()->role->hasPermission('pesquisa-unidade');
    }

    public function research_edit(): bool
    {
        return Auth::user()->role->hasPermission('pesquisa-editar');
    }

    public function report(): bool
    {
        return Auth::user()->role->hasPermission('relatório-visualizar');
    }

    public function report_audit(): bool
    {
        return Auth::user()->role->hasPermission('relatório-auditoria');
    }
}

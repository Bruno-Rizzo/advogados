<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{

    public function viewAny(User $user): bool
    {
        //
    }


    public function view(): bool
    {
        return Auth::user()->role->hasPermission('usuario-visualizar');
    }


    public function create(): bool
    {
        return Auth::user()->role->hasPermission('usuario-cadastrar');
    }


    public function update(): bool
    {
        return Auth::user()->role->hasPermission('usuario-editar');
    }


    public function delete(): bool
    {
        return Auth::user()->role->hasPermission('usuario-excluir');
    }


    public function restore(User $user, User $model): bool
    {
        //
    }


    public function forceDelete(User $user, User $model): bool
    {
        //
    }
}

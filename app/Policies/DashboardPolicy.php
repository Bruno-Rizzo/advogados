<?php

namespace App\Policies;

use App\Models\Dashboard;
use Illuminate\Support\Facades\Auth;

class DashboardPolicy
{

    public function viewAny(): bool
    {
        //
    }


    public function view(): bool
    {
        return Auth::user()->role->hasPermission('dashboard-visualizar');
    }


    public function create(): bool
    {

    }


    public function update(): bool
    {

    }


    public function delete(): bool
    {

    }


    public function restore(): bool
    {

    }


    public function forceDelete(): bool
    {

    }
}

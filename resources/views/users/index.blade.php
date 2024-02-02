@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                       <span style="font-size: 18px">Usuários | Lista</span>
                    </div>

                    <div class="card-body">

                        <div class="mb-4">
                            @can('create', App\Models\User::class)
                            <a href="{{ route('users.create') }}" class="btn btn-sm btn-info">
                                + Novo Usuário
                            </a>
                            @endcan
                        </div>

                        <div class="row">

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-body">

                                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>ID</th>
                                                <th>Usuário</th>
                                                <th>Função</th>
                                                <th class="text-center">Lotação</th>
                                                <th class="text-center">Situação</th>
                                                @can('update', App\Models\User::class)
                                                <th class="text-center">Editar</th>
                                                @endcan
                                                {{-- @can('delete', App\Models\User::class)
                                                <th class="text-center">Excluir</th>
                                                @endcan --}}
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->identify}}</td>
                                                <th>{{$user->email}}</td>
                                                <td>{{$user->role->name}}</td>
                                                <td class="text-center">{{$user->prisionalUnit->acronym}}</td>
                                                <td class="text-center">
                                                    @if($user->status == 1)
                                                    <span class="badge rounded-pill bg-success">{{'Ativo'}}</span>
                                                    @else
                                                    <span class="badge rounded-pill bg-danger">{{'inativo'}}</span>
                                                    @endif
                                                </td>
                                                @can('update', App\Models\User::class)
                                                <td class="text-center">
                                                    <a href="{{route('users.edit', $user->id)}}" class="text-success">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </td>
                                                @endcan
                                                {{-- @can('delete', App\Models\User::class)
                                                <td class="text-center">
                                                    <a href="{{route('users.confirm', $user->id)}}" class="text-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                                @endcan --}}
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>

</div>

@endsection

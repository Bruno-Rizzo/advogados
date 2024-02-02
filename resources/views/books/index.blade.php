@extends('layouts.app')

@section('main_content')
    <div class="page-content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                   <div class="card">

                        <div class="card-header">
                            <span style="font-size: 18px">Livro de Advogados | Registros</span>
                        </div>

                        <div class="card-body">

                            <div class="mb-4 d-flex justify-content-between">
                                <div>
                                    <a href="{{ route('books.create') }}" class="btn btn-sm btn-info">
                                        + Novo Registro
                                    </a>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-12">

                                    <div class="card">

                                        <div class="card-body">

                                            @if(count($books) != 0)

                                            <table id="table" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Nome do Advogado</th>
                                                        <th>Número OAB</th>
                                                        <th class="text-center">Entrada</th>
                                                        <th class="text-center">Saída</th>
                                                        <th class="text-center">Editar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($books as $book)
                                                        <tr>
                                                            <td>{{ $book->adv_name }}</td>
                                                            <td>{{ $book->oab_number }}</td>
                                                            <th class="text-center">{{ $book->entrance }}</td>
                                                            <td class="text-center">{{ $book->exit }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('books.edit', $book->id) }}"
                                                                    class="text-success">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            @else

                                            <p style="font-size: 15px">Nenhum Atendimento Registrado</p>

                                            @endif

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

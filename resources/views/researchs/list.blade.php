@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                       <span style="font-size: 18px">Livro de Advogados | Resultado da Pesquisa</span>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-body">

                                        <div class="card-header d-flex justify-content-between mb-3">
                                            <div>
                                                <strong>Unidade Prisional: {{$up->name}}</strong>
                                            </div>
                                            <div>
                                                <strong>Data do Livro: {{Carbon\Carbon::parse($date)->format('d/m/Y')}}</strong>
                                            </div>
                                        </div>

                                        <table  class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th style="width:25%">Nome do Advogado</th>
                                                        <th class="text-center" style="width:10%">Número OAB</th>
                                                        <th class="text-center" style="width:10%">Entrada</th>
                                                        <th class="text-center" style="width:10%">Saída</th>
                                                        <th>Interno(s)</th>
                                                        @can('research_edit', App\Models\Book::class)
                                                        <th class="text-center" style="width:10%">Editar</th>
                                                        @endcan
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($books as $book)
                                                        <tr>
                                                            <td>{{ $book->adv_name }}</td>
                                                            <td class="text-center">{{ $book->oab_number }}</td>
                                                            <th class="text-center">{{ $book->entrance }}</td>
                                                            <td class="text-center">{{ $book->exit }}</td>
                                                            <td>
                                                                @foreach ($book->prisioner as $p)
                                                                    {{$p.','}}
                                                                @endforeach
                                                            </td>
                                                            @can('research_edit', App\Models\Book::class)
                                                            <td class="text-center">
                                                                <a href="{{ route('researchs.edit', $book->id) }}"
                                                                    class="text-success">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                            </td>
                                                            @endcan
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <p class="ms-3 fw-bold">Total de Advogados: {{count($books)}}</p>

                                            @foreach ($books as $book)

                                            @if($book->observations)

                                            <div class="card-header d-flex justify-content-between mb-3 mt-3">
                                                <div>
                                                    <strong>Observação:</strong>
                                                </div>
                                            </div>

                                            <textarea class="form-control" name="observations" rows="2" style="width:100%">{{$book->observations}}</textarea>

                                            @endif

                                            @endforeach

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

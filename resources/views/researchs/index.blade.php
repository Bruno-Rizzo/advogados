@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                       <span style="font-size: 18px">Livro de Advogados | Pesquisas</span>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-body">

                                        <form action="{{ route('researchs.search')}}" method="post">
                                            @csrf

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Data do Livro</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" type="date" name="date">
                                                </div>
                                            </div>

                                            @can('research_unit', App\Models\Book::class)
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label">Unidade Prisional</label>
                                                <div class="col-sm-4">
                                                    <select class="form-select" name="prisional_unit_id">
                                                        <option value="">Selecione uma unidade...</option>
                                                        @foreach ($units as $unit)
                                                            <option value="{{ $unit->id }}">
                                                                {{ $unit->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            @endcan

                                            <div class="row mb-3">
                                                <div class="col-sm-2">
                                                    <button type="submit" class="btn btn-sm btn-info">
                                                         Pesquisar Livro
                                                    </button>
                                                </div>
                                            </div>

                                        </form>

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

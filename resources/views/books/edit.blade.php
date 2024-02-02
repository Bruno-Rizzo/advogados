@extends('layouts.app')

@section('main_content')
    <div class="page-content">

        <div class="container-fluid">

            <div class="row">

                <div class="col-12">

                    <form action="{{ route('books.update', $book->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <div>
                                    <strong>Usuário: {{ Auth::user()->name }}</strong>
                                </div>
                                <div>
                                    <strong>ID Funcional: {{ Auth::user()->identify }}</strong>
                                </div>
                                <div>
                                    <strong>Lotação: {{ Auth::user()->prisionalUnit->name }}</strong>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Nome do(a) Advogado(a)</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" name="adv_name"
                                            value="{{ $book->adv_name }}">
                                        @error('adv_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Número da OAB</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="text" name="oab_number"
                                            value="{{ $book->oab_number }}">
                                        @error('oab_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Horário de Entrada</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="time" name="entrance"
                                            value="{{ $book->entrance }}">
                                        @error('entrance')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Horário de Saída</label>
                                    <div class="col-sm-4">
                                        <input class="form-control" type="time" name="exit"
                                            value="{{ $book->exit }}">
                                        @error('exit')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <hr>

                                <div class="row mb-1">
                                    <p>
                                        <strong style="font-size: 16px">Interno(s)</strong>
                                    </p>
                                </div>

                                @foreach ($book->prisioner as $item)
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Nome</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="prisioner[]"
                                                value="{{ $item }}">
                                            @error('prisioner')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach

                                <hr>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Observação</label>
                                    <div class="col-sm-4">
                                        <textarea class="form-control" name="observations" rows="3" style="width:100%">{{$book->observations}}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-info">
                                    Editar Registro
                                </button>
                           </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection

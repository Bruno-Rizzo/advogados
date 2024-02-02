@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                       <span style="font-size: 18px">{{Auth::user()->role->name}} - {{Auth::user()->prisionalUnit->name}}</span>
                    </div>

                    <div class="card-body">


                       @if(Auth::user()->can('view', App\Models\Dashboard::class))

                        <div class="d-flex col-12">

                            <div class="col-9 me-2">
                                <div class="mt-3" style="width: 80%">
                                    {!! $chart->container() !!}
                                </div>

                                <script src="{{ $chart->cdn() }}"></script>

                                {{ $chart->script() }}
                            </div>

                            <div class="col-3 ms-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">Atendimentos de Advogados / Ano</p>
                                                <h4 class="mb-2">{{$total}}</h4>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-info rounded-3">
                                                    <i class="ri-scales-line font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @else

                        <h4 class="card-title">
                            Bem vindo(a) ao sistema de Controle de Advogados da Polícia Penal
                        </h4>

                        @endif

                    </div>

                </div>

            </div>

        </div>


    </div>

</div>

@endsection

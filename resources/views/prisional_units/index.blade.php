@extends('layouts.app')

@section('main_content')

<div class="page-content">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <span style="font-size: 18px">Lotações | Lista</span>
                    </div>

                    <div class="card-body">

                        <div class="mb-4">
                            <a href="{{route('prisionalUnits.create')}}" class="btn btn-sm btn-info">
                                + Nova Lotação
                            </a>
                        </div>

                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Unidade Prisional / Administrativa</th>
                                    <th>Sigla</th>
                                    <th class="text-center">Editar</th>
                                 </tr>
                            </thead>
                            <tbody>
                                @foreach ($units as $unit)
                                <tr>
                                    <td>{{$unit->name}}</td>
                                    <td>{{$unit->acronym}}</td>
                                    <td class="text-center">
                                        <a href="{{route('prisionalUnits.edit',$unit->id)}}" class="text-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

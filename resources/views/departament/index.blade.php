@extends('layouts.base')
@section('titulo', '')
@section('content')
<div class="page-wrapper">
        <!-- Page-body start -->
<div class="page-body">
    <div class="page-body">
        @include('departament.breadcrumb')
            <div class="card">
                <div class="card-header">
                    <h5>Tabela de Departamentos - Departamentos</h5>
                    <span>As is described by the basic DOM positioning example you can use the dom initialization parameter to move DataTables features around the table to where you want them.</span>
                </div>
                <div class="card-block">
                    <div class="dt-responsive table-responsive">

                        <table id="compact" class="table compact table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th>Acçãp</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($departments as $department)
                                    <tr>
                                        <td align="center"><a href="/client-types/{{ $department->id }}/edit"><i class="feather icon-edit"></i></a></td>
                                        <td>{{$department->name}}</td>
                                        <td>{{$department->description}}</td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @include('departament.modelCreate')
</div>
@endsection

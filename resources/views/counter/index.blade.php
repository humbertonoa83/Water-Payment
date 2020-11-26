@extends('layouts.base')
@section('titulo', '')
@section('content')
    <div class="page-wrapper">
        <!-- Page-body start -->
        <div class="page-body">
            <div class="card">
                <!-- Email-card start -->
                <div class="card-block email-card">

                    @if (session('message'))
                        @include('alerts.sucess-messages')
                    @endif

                    <div class="row">
                        <!-- Left-side section start -->
                        <div class="col-lg-12 col-xl-2">
                            @include('counter.includes.header')
                        </div>

                        <!-- Left-side section end -->
                        <!-- Right-side section start -->
                        <div class="col-lg-12 col-xl-10">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">
                                    <div class="mail-body">
                                        @include('counter.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            <div class="dt-responsive table-responsive">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label><strong>Estado</strong></label>
                                                            <select id="status" class="form-control">
                                                                <option value="">Seleccione o Estado</option>
                                                                <option value="1">Activo</option>
                                                                <option value="0">Desactivo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label><strong>Marca</strong></label>
                                                            <select id="brand" class="form-control">
                                                                <option value="">Seleccione o Estado</option>
                                                                <option value="Galaxy water plus">Activo</option>
                                                                <option value="plus +++">Desactivo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label><strong>Clientes</strong></label>
                                                            <select id="client_id" class="form-control">
                                                                <option value="">Seleccione o Cliente</option>
                                                                @foreach( $clients as $client)
                                                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <table id="couter_table" class="display nowrap couter_table" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Marca</th>
                                                        <th>Refêrencia</th>
                                                        <th>Estado</th>
                                                        <th>Cliente</th>
                                                    </tr>
                                                    </thead>


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="e-starred" role="tabpanel">
                                    <div class="mail-body">
                                        @include('counter.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            <div class="table-responsive dt-responsive">
                                                <table id="complex-dt" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>Acção</th>
                                                        <th>Nome</th>
                                                        <th>Marca</th>
                                                        <th>Refêrencia</th>
                                                        <th>Estado</th>
                                                        <th>Cliente</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($counters as $counter)
                                                        <tr>
                                                            <td align="center"><a href="/counters/{{ $counter->id }}/edit"><i class="feather icon-edit"></i></a></td>
                                                            <td>{{$counter->name}}</td>
                                                            <td>{{$counter->brand}}</td>
                                                            <td>{{$counter->reference}}</td>
                                                            <td>{{$counter->status == 0 ? 'Desactivo' : 'Activo'}}</td>
                                                            <td>{{$counter->status == 0 ? 'Sem cliente' : $counter->client()->first()->name}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="novo-contador" role="tabpanel">
                                    <div class="mail-body">
                                        @include('counter.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('counter.includes.form')
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="chaged" role="tabpanel">
                                    <div class="mail-body">
                                        @include('counter.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('counter.includes.form')
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="form-change-couter" role="tabpanel">
                                    <div class="mail-body">
                                        @include('counter.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('counter.includes.form-change-counter')
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Right-side section end -->
                    </div>
                </div>
                <!-- Email-card end -->
            </div>
        </div>
        <!-- Page-body start -->
    </div>

@endsection

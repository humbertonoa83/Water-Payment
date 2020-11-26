@extends('layouts.base')
@section('titulo', '')
@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">

            {{--<div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
                <div class="alert alert-danger" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
                <div class="alert alert-danger" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
            </div>--}}
            <!-- page statustic chart start -->
                <div class="col-xl-3 col-md-6">
                    <div class="card card-red text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="m-b-0">0</h4>
                                    <p class="m-b-0">Avarias</p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fa fa-dashboard f-20"></i>
                                </div>
                            </div>
                            <div id="Widget-line-chart1" class="chart-line chart-shadow" style="width:100%;height:75px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-blue text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="m-b-0">10</h4>
                                    <p class="m-b-0">Avarias e Reclamações </p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fa fa-clock-o f-20"></i>
                                </div>
                            </div>
                            <div id="Widget-line-chart2" class="chart-line chart-shadow" style="width:100%;height:75px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-green text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="m-b-0">8</h4>
                                    <p class="m-b-0">Recargas</p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fa fa-fax f-20"></i>
                                </div>
                            </div>
                            <div id="Widget-line-chart3" class="chart-line chart-shadow" style="width:100%;height:75px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-yellow text-white">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="m-b-0">550</h4>
                                    <p class="m-b-0">Notificações</p>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fa fa-paper-plane-o f-20"></i>
                                </div>
                            </div>
                            <div id="Widget-line-chart4" class="chart-line chart-shadow" style="width:100%;height:75px"></div>
                        </div>
                    </div>
                </div>
                <!-- page statustic chart end -->

                <!-- product and new customar start -->
                <div class="col-xl-4 col-md-6">
                    <div class="card new-cust-card">
                        <div class="card-header">
                            <h5><span style="color: red">Reclamacoes Pedentes</span></h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                    <li><i class="feather icon-trash close-card"></i></li>
                                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                </ul>
                            </div>
                        </div>
                        {{--                        <div class="card-block">--}}
                        {{--                            @foreach( $complaints ?? '' as $complaint)--}}
                        {{--                            <div class="align-middle m-b-25">--}}
                        {{--                                @if($complaint->client()->first()->user()->first())--}}
                        {{--                                <img src="{{'storage' .$complaint->client()->first()->user()->first()->avatar}}" alt="user image" class="img-radius img-40 align-top m-r-15">--}}
                        {{--                                    @else--}}
                        {{--                                    <img src="{{asset('img/user_default.png')}}" alt="user image" class="img-radius img-40 align-top m-r-15">--}}
                        {{--                                @endif--}}
                        {{--                                <div class="d-inline-block">--}}
                        {{--                                    <a href="#!"><h6>{{$complaint->client()->first()->name}}</h6></a>--}}
                        {{--                                    <p class="text-muted m-b-0">{{$complaint->reason}}</p>--}}
                        {{--                                    <span class="status active"></span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                                @endforeach--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-8 col-md-6">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Respostas de Reclamacoes</h5>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                    <li><i class="feather icon-trash close-card"></i></li>
                                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                </ul>
                            </div>
                        </div>
                        {{--                        <div class="card-block">--}}
                        {{--                            <div class="table-responsive">--}}
                        {{--                                <table class="table table-hover m-b-0">--}}
                        {{--                                    <thead>--}}
                        {{--                                    <tr>--}}
                        {{--                                        <th>Cliente</th>--}}
                        {{--                                        <th>Motivo</th>--}}
                        {{--                                        <th>Descricao</th>--}}
                        {{--                                        <th>Estado</th>--}}
                        {{--                                        <th>Data</th>--}}
                        {{--                                    </tr>--}}
                        {{--                                    </thead>--}}
                        {{--                                    <tbody>--}}
                        {{--                                    @foreach($all_complaints as $all_complaint)--}}
                        {{--                                    <tr>--}}
                        {{--                                        <td>{{$all_complaint->client()->first()->name}}</td>--}}
                        {{--                                        <td>{{$all_complaint->reason}}</td>--}}
                        {{--                                        <td>{{$all_complaint->description}}</td>--}}
                        {{--                                        <td @if($all_complaint->status == 'Pendente')style="color: red" @else style="color: #0D9C54" @endif><strong>{{$all_complaint->status}}</strong></td>--}}
                        {{--                                        <td>{{$all_complaint->created_at}}</td>--}}

                        {{--                                    </tr>--}}
                        {{--                                        @endforeach--}}
                        {{--                                    </tbody>--}}
                        {{--                                </table>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}
                    </div>
                </div>
                <!-- product and new customar end -->
            </div>
        </div>
    </div>
@endsection

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
                        <div class="col-lg-12 col-xl-3">
                            <div class="user-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="p-20 text-center">
                                            <a data-toggle="modal" data-target="#default-Modal-mpesa"
                                               class="btn btn-danger waves-effect">Comprar Nova Recarga</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-20 text-center">
                                            <a data-toggle="modal" data-target="#default-Modal-second"
                                               class="btn btn-danger waves-effect">Segunda via</a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="page-list nav nav-tabs flex-column" id="pills-tab" role="tablist">
                                    <li class="nav-item mail-section">
                                        <a class="nav-link waves-effect d-block active" data-toggle="pill" href="#e-inbox" role="tab">
                                            <i class="icofont icofont-inbox"></i> Historico de Recargas
                                            <span class="label label-primary float-right">6</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mail-section">
                                        <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-starred" role="tab">
                                            <i class="icofont icofont-star"></i> Segunda Via
                                            <span class="label label-primary float-right">6</span>
                                        </a>
                                    </li>
                                    @role('operator|admin|super-admin')
                                    <li class="nav-item mail-section">
                                        <a class="nav-link waves-effect d-block" data-toggle="pill" href="#e-debtor"
                                           role="tab">
                                            <i class="icofont icofont-money"></i> Devedores
                                            <span class="label label-primary float-right">6</span>
                                        </a>
                                    </li>
                                    @endrole
                                </ul>

                            </div>
                        </div>
                        <!-- Left-side section end -->
                        <!-- Right-side section start -->
                        <div class="col-lg-12 col-xl-9">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">
                                    <div class="mail-body">
                                        @include('recharge.breadcrumb')
                                        <div class="mail-body-content">
                                            <div class="table-responsive">
                                                <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>Contador</th>
                                                        <th>Referencia</th>
                                                        <th>Valor da recarga</th>
                                                        <th>Codigo da recarga</th>
                                                        <th>Tipo de pagamento</th>
                                                        <th>Via</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($recharges as $recharge)
                                                        <tr>
                                                            <td>{{$recharge->counter()->first()->reference}}</td>
                                                            <td>{{$recharge->references}}</td>
                                                            <td>{{$recharge->value}}</td>
                                                            <td>{{$recharge->code}}</td>
                                                            <td>{{$recharge->payment_type}}</td>
                                                            <td>{{$recharge->via}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="e-starred" role="tabpanel">
                                    <div class="mail-body">
                                        @include('recharge.breadcrumb')
                                        <div class="mail-body-content">
                                            <div class="table-responsive">
                                                <table id="alt-pg-dt" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>Contador</th>
                                                        <th>Referencia</th>
                                                        <th>Valor da recarga</th>
                                                        <th>Codigo da recarga</th>
                                                        <th>Tipo de pagamento</th>
                                                        <th>Via</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($sell_recharges_second as $sell_recharge_second)
                                                        <tr>
                                                            <td>{{$sell_recharge_second->counter()->first()->reference}}</td>
                                                            <td>{{$sell_recharge_second->references}}</td>
                                                            <td>{{$sell_recharge_second->value}}</td>
                                                            <td>{{$sell_recharge_second->code}}</td>
                                                            <td>{{$sell_recharge_second->payment_type}}</td>
                                                            <td>{{$sell_recharge_second->via}}</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="e-debtor" role="tabpanel">
                                    <div class="mail-body">
                                        @include('recharge.breadcrumb')
                                        <div class="mail-body-content">
                                            <div class="table-responsive">
                                                <table id="compact" class="table compact table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>Contador</th>
                                                        <th>Cliente</th>
                                                        <th>Contacto</th>
                                                        <th>Data da última venda</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($stack as $stac)
                                                        <tr>
                                                            <td>{{$stac->reference}}</td>
                                                            <td>{{$stac->client()->first()->name}}</td>
                                                            <td>{{$stac->client()->first()->telephone}}</td>
                                                            <td><p style="align-content: center">{{$stac->rechargerSell()->latest()->first() ? \Carbon\Carbon::createFromFormat
                                                                ('Y-m-d H:i:s',  $stac->rechargerSell()->latest()->first()->created_at)->format('m') : '--'}}</p></td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="e-drafts" role="tabpanel">
                                    <div class="mail-body">

                                        <div class="mail-body-content">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-warning"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Google Inc</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">08:01 AM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-primary"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">John Doe</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Coming Up Next Week</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">13:02 PM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-info"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Sara Soudein</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">SVG new updates comes for you</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">00:05 AM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-danger"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Rinky Behl</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Photoshop updates are available</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">10:01 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-primary"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Harry John</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">New upcoming data available</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">11:01 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-danger"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">12:01 PM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-primary"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">07:15 AM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-danger"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Hanry Joseph</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">SCSS current working for new updates</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">12:01 PM</td>
                                                    </tr>
                                                    <tr class="read">
                                                        <td>
                                                            <div class="check-star">
                                                                <div class="checkbox-fade fade-in-primary checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
                                                                    </label>
                                                                </div>
                                                                <i class="icofont icofont-star text-primary"></i>
                                                            </div>
                                                        </td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Liu Koi Yan</a></td>
                                                        <td><a href="email-read.html" class="email-name waves-effect">Charts waiting for you</a></td>
                                                        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
                                                        <td class="email-time">07:15 AM</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="e-trash" role="tabpanel">
                                    <div class="mail-body">
                                        @include('recharge.breadcrumb')
                                        <div class="mail-body-content">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Action</th>
                                                        <th>Nome</th>
                                                        <th>Descricao</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                    </tbody>
                                                </table>
                                            </div>
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
    @include('recharge.modelPayment',$counters)
    @include('recharge.modelSecondVia',$counters)
@endsection

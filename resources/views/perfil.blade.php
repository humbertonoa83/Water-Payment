@extends('layouts.base')
@section('titulo', '')
@section('content')
<div class="page-wrapper">
    <!-- Page-body start -->
    <div class="page-body">
        <div class="card">
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel widget light-widget panel-bd-top">
                        <div class="panel-heading no-title"> </div>
                        <div class="panel-body">
                            <div class="text-center vd_info-parent"> <img alt="example image" src="{{ asset('img/big.jpg') }}"> </div>

                            <h2 class="font-semibold mgbt-xs-5">{{auth()->user()->name}}</h2>

                            <p>Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="mgtp-20">
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <td style="width:60%;">Status</td>
                                        <td><span class="label label-success">Activo</span></td>
                                    </tr>

                                    <tr>
                                        <td>Member Since</td>
                                        <td> 07 de Janeiro 2020 </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- panel widget -->


                    <!-- panel widget -->
                </div>
                <div class="col-sm-9">
                    <p class="pd-10" ></p>
                    <div class="tabs widget">
                        <ul class="nav nav-tabs widget">
                            <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="profile-tab" class="tab-pane active">
                                <div class="pd-20">
                                    <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-gg-circle mgr-10 profile-icon"></i> Sobre</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Primeiro nome:</label>
                                                <div class="col-xs-7 controls">{{auth()->user()->name}}</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Apelido:</label>
                                                <div class="col-xs-7 controls">Exemplo</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Nome do Usuario:</label>
                                                <div class="col-xs-7 controls">{{auth()->user()->name}}</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Email:</label>
                                                <div class="col-xs-7 controls">{{auth()->user()->email}}</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Cidade:</label>
                                                <div class="col-xs-7 controls">Maputo</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Capital:</label>
                                                <div class="col-xs-7 controls">Maputo</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Data de Nascimento:</label>
                                                <div class="col-xs-7 controls">Jan 22, 1984</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Phone:</label>
                                                <div class="col-xs-7 controls">+1-234-5678</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="pd-10"  />
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-dashboard mgr-10 profile-icon"></i> Informação do Contador</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Referencia</label>
                                                <div class="col-xs-7 controls">{{auth()->user()->name}}</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row mgbt-xs-0">
                                                <label class="col-xs-5 control-label">Marca</label>
                                                <div class="col-xs-7 controls">Caraiban</div>
                                                <!-- col-sm-10 -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- pd-20 -->
                            </div>
                            <!-- home-tab -->


                        <!-- tab-content -->
                    </div>
                    <!-- tabs-widget -->              </div>
            </div>
        </div>
    </div>
    <!-- Page-body start -->
    </div>
@endsection

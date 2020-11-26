@extends('layouts.base')
@section('titulo', '')
@section('content')
<div class="page-wrapper">
    <!-- Page body start -->
    <div class="page-body button-page">
        @if (session('message'))
            @include('alerts.sucess-messages')
        @endif
        <div class="row">
            <!-- Static Example modal start-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bootstrap Modals</h5>
                    </div>
                    <div class="card-block">
                        <p>use code<code> modal-lg, modal-sm</code> to use large and small popup modal.</p>
                        <ul>
                            <li>
                                <!-- Modal static-->
                                <button type="button" class="btn btn-default waves-effect" data-toggle="modal" data-target="#default-Modal">Transferencia Bancaria</button>
                                <div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Modal title</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Static Modal</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <!-- Modal static-->
                                <button type="button" class="btn btn-default waves-effect" data-toggle="modal" data-target="#default-Modal-mpesa">Mpesa</button>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- Static Example modal start-->
        </div>
    </div>
    <!-- Page body end -->
    <div class="card">
        <div class="card-header">
            <h5>Gerir Recargas - Tabela de Recargas</h5>
            <span>As is described by the basic DOM positioning example you can use the dom initialization parameter to move DataTables features around the table to where you want them.</span>
        </div>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table id="compact" class="table compact table-striped table-bordered nowrap">
                    <thead>
                    <tr>
                        <th>Action</th>
                        <th>Referencia</th>
                        <th>Valor da recarga</th>
                        <th>Codigo da recarga</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recharges as $recharge)
                        <tr>
                            <td align="center"><a href="/recharges/{{ $recharge->id }}/edit"><i class="feather icon-edit"></i></a></td>
                            <td>{{$recharge->reference}}</td>
                            <td>{{$recharge->value}}</td>
                            <td>{{$recharge->code}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

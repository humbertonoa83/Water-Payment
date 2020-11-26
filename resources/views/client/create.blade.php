@extends('layouts.base')

@section('titulo', '')

@section('content')
<div class="page-wrapper">


        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Inputs Validation start -->

                    <!-- Number Validation card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Cadastro de clientes</h5>
                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                        </div>
                        lllk
                        <div class="mail-body-header">
                            <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
                                <i class="fa fa-exclamation-circle"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-xs waves-effect waves-light">
                                <i class="fa fa-inbox"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
                                <i class="fa fa-user"></i>
                            </button>
                            <div class="btn-group dropdown-split-primary">
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-folder"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item waves-effect waves-light" href="#">Actiongg</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown-split-primary">
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    More
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                        @include('client.includes.form')
                    </div>
                    <!-- Number Validation card end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
@endsection

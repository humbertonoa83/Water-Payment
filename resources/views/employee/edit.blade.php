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
                            @include('employee.includes.headerEdit')
                        </div>
                        <!-- Left-side section end -->
                        <!-- Right-side section start -->
                        <div class="col-lg-12 col-xl-10">
                            <div class="tab-content" id="pills-tabContent">
                                    <div class="mail-body">
                                        @include('employee.includes.breadcrumb')
                                        @include('employee.includes.formEdit')
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

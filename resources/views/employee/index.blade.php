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
                            @include('employee.includes.header')
                        </div>
                        <!-- Left-side section end -->
                        <!-- Right-side section start -->
                        <div class="col-lg-12 col-xl-10">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">
                                    <div class="mail-body">
                                        @include('employee.includes.breadcrumb')
                                        @include('employee.includes.table-employee')
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="statistics" role="tabpanel">
                                    <div class="mail-body">
                                        @include('employee.includes.breadcrumb')
                                        <div class="mail-body-content">

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="employees_type" role="tabpanel">
                                    <div class="mail-body">
                                        @include('employee.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('employee.includes.employees_type')
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="employees_type_new" role="tabpanel">
                                    <div class="mail-body">
                                        @include('employee.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('employee.includes.employees_type_new')
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-employee" role="tabpanel">
                                    <div class="mail-body">
                                        @include('employee.includes.breadcrumb')
                                        <div class="mail-body-content">
                                            @include('employee.includes.form')
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

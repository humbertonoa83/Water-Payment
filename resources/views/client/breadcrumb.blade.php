<div class="page-header card" style="margin-top: 10px;">
    <div class="row align-items-end">
        <div class="col-lg-8 mb-3">
            <div class="page-header-title">
                @if (session('message'))
                    @include('alerts.sucess-messages')
                @endif
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Clientes</h5>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
{{--            <div class="page-header-breadcrumb">--}}
{{--                <ul class="breadcrumb breadcrumb-title" style="">--}}
{{--                    <li class="breadcrumb-item"><i class="feather icon-refresh-cw reload-card"></i></li>--}}
{{--                    <li class="breadcrumb-item"><a data-toggle="modal" data-target="#default-Modal-createClient">Adicionar Tipo de Clinte<i class="feather open-card-option icon-plus"></i></a> </li>--}}
{{--                    <li class="breadcrumb-item"><a href="">Tipos de Clinte<i class="feather open-card-option icon-plus"></i></a> </li>--}}
{{--                    <li class="breadcrumb-item"><i class="feather icon-trash close-card"></i></li>--}}
{{--                    <li class="breadcrumb-item"><a href="/clients/create">Adicionar<i class=""></i></a> </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="mail-body-header">
        <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
            <i class="fa fa-exclamation-circle"></i>
        </button>
        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">
            <i class="fa fa-inbox"></i>
        </button>
        <div class="btn-group dropdown-split-primary">
            <button type="button" class="btn btn-info">
                <a href="{{ route('clients.create') }}"><i class="feather open-card-option icon-plus">Novo</i></a>
            </button>
        </div>
        <div class="btn-group dropdown-split-primary">
            <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tipo de Clientes
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item waves-effect waves-light" href="{{ route('client-types.index') }}">Todos</a>
                <a class="dropdown-item waves-effect waves-light" href="{{ route('client-types.create') }}">Adicionar</a>
            </div>
        </div>
    </div>
</div>

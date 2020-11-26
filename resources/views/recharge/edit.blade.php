@extends('layouts.base')

@section('titulo', '')

@section('content')
    <div class="page-wrapper">
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Actualizacao de recargas</h5>
                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                        </div>
                        <div class="card-block">

                            <form method="POST" action="/recharges/{{ $recharge->id }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Referencia <span class="required">*</span></label>
                                            <input class="form-control border-form-control" name="reference" value="{{$recharge->reference}}" placeholder="Insira o seu primeiro nome" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Valor <span class="required">*</span></label>
                                            <input class="form-control border-form-control"  name="value" value="{{$recharge->value}}" placeholder="Insira o seu apelido" type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Codigo da recarga<span class="required">*</span></label>
                                            <input class="form-control border-form-control" name="code" value="{{$recharge->code}}" placeholder="Insira o seu primeiro nome" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <button type="button" data-toggle="modal" data-target="#deleteRechargeModal{{ $recharge->id }}" class="btn btn-danger border-none"><i class="fa fa-trash"></i> Deletar </button>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <button type="button" class="btn btn-danger border-none"> Cancelar </button>
                                        <button type="submit" class="btn btn-success border-none"> Salvar alterações </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Number Validation card end -->
                </div>
            </div>
        </div>
        @include('dialogs.confirm-delete-recharge-dialog', $recharge)
    </div>
@endsection

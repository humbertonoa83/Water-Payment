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
                            <h5>Cadastro de contadores</h5>
                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="{{ route('counters.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Nome do contador <span class="required">*</span></label>
                                            <input class="form-control border-form-control" name="name" value="" placeholder="Insira um nome para o contador" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Marca <span class="required">*</span></label>
                                            <input class="form-control border-form-control"  name="brand" value="" placeholder="Insira a marca do contador" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Referência <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value=""  name="reference" placeholder="Insira a referência do contador" type="number">
                                        </div>
                                    </div>
                                </div>
                                <input name="status" value="0" type="hidden">
                                <div class="row">
                                    <div class="col-sm-12 text-right">
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
        <!-- Page body end -->
    </div>
@endsection

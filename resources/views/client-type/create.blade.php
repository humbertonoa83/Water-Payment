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
                            <h5>Cadastro de Tipos de cliente</h5>
                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="{{ route('client-types.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Nome <span class="required">*</span></label>
                                            <input class="form-control border-form-control" name="name" value="" placeholder="Insira o seu primeiro nome" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Descricao <span class="required">*</span></label>
                                            <input class="form-control border-form-control"  name="description" value="" placeholder="Insira o seu apelido" type="text">
                                        </div>
                                    </div>
                                </div>
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

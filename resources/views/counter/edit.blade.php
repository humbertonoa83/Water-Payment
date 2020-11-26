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
                            <h5>Actualizar  de contadores</h5>
                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                        </div>
                        <div class="card-block">
                            <form method="POST" action="/counters/{{ $counter->id }}">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Nome do contador <span class="required">*</span></label>
                                            <input class="form-control border-form-control" name="name" value="{{$counter->name}}" placeholder="Insira um nome para o contador" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Marca <span class="required">*</span></label>
                                            <input class="form-control border-form-control"  name="brand" value="{{$counter->brand}}" placeholder="Insira a marca do contador" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Referência <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="{{$counter->reference}}"  name="reference" placeholder="Insira a referência do contador" type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <button type="button" data-toggle="modal" data-target="#deleteCounterModal{{ $counter->id }}" class="btn btn-danger border-none"><i class="fa fa-trash"></i> Deletar </button>
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
        <!-- Page body end -->
        @include('dialogs.confirm-delete-counter-dialog', $counter)
    </div>

@endsection

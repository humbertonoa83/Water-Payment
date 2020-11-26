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
                            <h5>Actualizar dados de clientes</h5>
                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                        </div>
                        <div class="card-block">

                            <form method="POST" action="/clients/{{ $client->id }}">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Primeiro nome <span class="required">*</span></label>
                                            <input class="form-control border-form-control" name="name" value="{{$client->name}}" placeholder="Insira o seu primeiro nome" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Apelido <span class="required">*</span></label>
                                            <input class="form-control border-form-control"  name="surname" value="{{$client->surname}}" placeholder="Insira o seu apelido" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Telefone <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="{{$client->telefone}}"  name="telefone" placeholder="+258 8X XXX XX XX" type="number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Endereço email <span class="required">*</span></label>
                                            <input class="form-control border-form-control " value="{{$client->email}}" name="email" placeholder="iamosahan@gmail.com"  type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Nacionalidade <span class="required">*</span></label>
                                            <input class="form-control border-form-control " value="{{$client->nationality}}" name="nationality"  type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">País de residência <span class="required">*</span></label>
                                            <input class="form-control border-form-control " value="{{$client->country}}" name="country"  type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Atribuir contador <span class="required">*</span></label>
                                            <select name="counter"  class="custom-select">
                                                <option value="-1">Selecione o contador</option>
                                                @foreach($counters as $counter )
                                                    <option value="{{$counter->id}}">{{$counter->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="gender" value="M">
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <button type="button" data-toggle="modal" data-target="#deleteClientModal{{ $client->id }}" class="btn btn-danger border-none"><i class="fa fa-trash"></i> Deletar </button>
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
    </div>

    @include('dialogs.confirm-delete-client-dialog', $client)
@endsection

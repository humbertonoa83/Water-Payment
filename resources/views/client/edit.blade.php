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
                                            <select  name="nationality" class="custom-select">
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">País de residência <span class="required">*</span></label>
                                            <select   name="country" class="custom-select">
                                                <option  value="{{$client->country}}">{{$client->country}}</option>
                                                <option value="AF">Alaska</option>
                                                <option value="AX">New Hampshire</option>
                                                <option value="AL">Oregon</option>
                                                <option value="DZ">Toronto</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Número de documento <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="{{$client->document_name}}" name="document_name" placeholder="123456" type="number">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Tipo de documento <span class="required">*</span></label>
                                            <select name="document_type"  class="custom-select">
                                                <option @if($client->document_type == 1) value="1" @else value="2" @endif >{{$client->document_type}}</option>
                                                <option value="AF">California</option>
                                                <option value="AX">Florida</option>
                                                <option value="AL">Georgia</option>
                                                <option value="DZ">Idaho</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Provincia <span class="required">*</span></label>
                                            <select name="province"  class="custom-select">
                                                <option value="">Select State</option>
                                                <option value="AF">California</option>
                                                <option value="AX">Florida</option>
                                                <option value="AL">Georgia</option>
                                                <option value="DZ">Idaho</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Distrito <span class="required">*</span></label>
                                            <select name="district"  class="custom-select">
                                                <option value="">Select State</option>
                                                <option value="AF">California</option>
                                                <option value="AX">Florida</option>
                                                <option value="AL">Georgia</option>
                                                <option value="DZ">Idaho</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Bairro <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="{{$address->neighborhood}}" name="neighborhood" placeholder="123456" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Rua <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="" name="street" placeholder="123456" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Avenida <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="" name="avenue" placeholder="123456" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Quarteirão <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="" name="block" placeholder="123456" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Numero da casa <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="" name="place_number" placeholder="123456" type="number">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Tipo de cliente <span class="required">*</span></label>
                                            <select name="client_type"  class="custom-select">
                                                <option value="-1">Selecione o tipo de cliente</option>
                                                @foreach($clients_type as $client_type )
                                                    <option value="{{$client_type->id}}">{{$client_type->name}}</option>
                                                @endforeach
                                            </select>
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

@extends('layouts.base')

@section('titulo', '')

@section('content')
    <div class="page-wrapper">
        <!-- Page body start -->
        <div class="page-body">
            @include('client.breadcrumb')

            <div class="container">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Passo 1</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Passo 2</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p>Passo 3</p>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('clients.store') }}">
                    @csrf
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Primeiro nome <span class="required">*</span></label>
                                        <input class="form-control border-form-control" name="name" value="" placeholder="Insira o seu primeiro nome" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Apelido <span class="required">*</span></label>
                                        <input class="form-control border-form-control"  name="surname" value="" placeholder="Insira o seu apelido" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Sexo <span class="required">*</span></label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                   value="M">
                                            <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                   value="F">
                                            <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Telefone <span class="required">*</span></label>
                                        <input class="form-control border-form-control" value=""  name="telephone" placeholder="+258 8X XXX XX XX" type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Endereço email <span class="required">*</span></label>
                                        <input class="form-control border-form-control " value="" name="email"
                                               placeholder="iamosahan@gmail.com" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Nacionalidade <span
                                                class="required">*</span></label>
                                        <select name="nationality" class="custom-select">
                                            <option value="Moçambicana">Moçambicana</option>
                                            <option value="Sul Africana">Sul Africana</option>
                                            <option value="Angolana">Angolana</option>
                                            <option value="Namibiana">Namibiana</option>
                                            <option value="Zimbabweana">Zimbabweana</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Tipo de documento <span
                                                    class="required">*</span></label>
                                            <select name="document_type" class="custom-select">
                                                @foreach($document_types as $document_type)
                                                    <option value="{{$document_type}}">{{$document_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Número de documento <span
                                                class="required">*</span></label>
                                        <input class="form-control border-form-control" value=""
                                               name="document_number" placeholder="123456" type="number">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>

                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Local de emissão <span
                                                class="required">*</span></label>
                                        <input class="form-control border-form-control " value="" name="issue_place"
                                               placeholder="iamosahan@gmail.com" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Data de emissão <span
                                                class="required">*</span></label>
                                        <input class="form-control border-form-control " value="" name="issue_date"
                                               placeholder="iamosahan@gmail.com" type="date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Data de validade do documento <span
                                                class="required">*</span></label>
                                        <input class="form-control border-form-control " value="" name="expiration_date"
                                               placeholder="iamosahan@gmail.com" type="date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Pais de residencia <span class="required">*</span></label>
                                        <select name="country"  class="custom-select">
                                            <option value="Moçambique">Moçambique</option>
                                            <option value="Africa do sul">Africa do sul</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Suazilândia">Suazilândia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Provincia <span class="required">*</span></label>
                                        <select name="province"  class="custom-select">
                                            <option value="Maputo">Maputo</option>
                                            <option value="Gaza">Gaza</option>
                                            <option value="Inhambane">Inhambane</option>
                                            <option value="Inhambane">Manica</option>
                                            <option value="Manica">Sofala</option>
                                            <option value="Sofala">Tete</option>
                                            <option value="Zambezia">Zambezia</option>
                                            <option value="Nampula">Nampula</option>
                                            <option value="Cabo Delgado">Cabo Delgado</option>
                                            <option value="Niassa">Niassa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Distrito <span class="required">*</span></label>
                                        <select name="district"  class="custom-select">
                                            <option value="Boane">Boane</option>
                                            <option value="Namaacha">Namaacha</option>
                                            <option value="Magude">Magude</option>
                                            <option value="Mahubo">Mahubo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Bairro <span class="required">*</span></label>
                                        <input class="form-control border-form-control" value="" name="neighborhood" placeholder="123456" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Rua <span class="required">*</span></label>
                                        <input class="form-control border-form-control" value="" name="street"
                                               placeholder="123456" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Avenida <span class="required">*</span></label>
                                        <input class="form-control border-form-control" value="" name="avenue"
                                               placeholder="123456" type="text">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>

                        </div>
                    </div>
                    <div class="row setup-content" id="step-3">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <h3> Step 3</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Quarteirão <span
                                                    class="required">*</span></label>
                                            <input class="form-control border-form-control" value="" name="block"
                                                   placeholder="123456" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Numero da casa <span class="required">*</span></label>
                                            <input class="form-control border-form-control" value="" name="place_number"
                                                   placeholder="123456" type="number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Tipo de cliente <span class="required">*</span></label>
                                            <select name="client_type_id"  class="custom-select">
                                                @foreach($clients_type as $client_type )
                                                    <option value="{{$client_type->id}}">{{$client_type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Atribuir contador <span class="required">*</span></label>
                                            <select name="counter_id"  class="custom-select">
                                                @foreach($counters as $counter )
                                                    <option value="{{$counter->id}}">{{$counter->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="button" class="btn btn-danger border-none"> Cancelar </button>
                                        <button type="submit" class="btn btn-success border-none"> Salvar alterações </button>
                                    </div>
                                </div>                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Inputs Validation start -->

                    <!-- Number Validation card start -->
                    <div class="card">

                        <div class="card-block">
                            <form method="POST" action="{{ route('clients.store') }}">




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

<div class="card-block">
    <div class="container-fluid">
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
        <form method="POST" action="{{ route('employees.store') }}">
            @csrf
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Primeiro nome <span class="required">*</span></label>
                                <input class="form-control border-form-control" required="required" name="name" value="" placeholder="Insira primeiro nome" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Apelido <span class="required">*</span></label>
                                <input class="form-control border-form-control"  required="required" name="surname" value="" placeholder="Insira apelido" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Telefone <span class="required">*</span></label>
                                <input class="form-control border-form-control" value=""  name="telefone" placeholder="+258 8X XXX XX XX" type="number">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Endereço email <span class="required">*</span></label>
                                <input class="form-control border-form-control " value="" name="email" placeholder="example@example.com"  type="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label"> <span class="required">Nacionalidade</span></label>
                                <input  name="nationality" class="form-control border-form-control" placeholder="Insira a nacionalidade" type="text"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">País de residência <span class="required">*</span></label>
                                <input   name="country" class="form-control border-form-control" placeholder="Insira o País de residência" type="text"/>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Tipo de documento <span class="required">*</span></label>
                                <select name="document_type"  class="custom-select">
                                    <option value="">Seleccione o tipo de Documento</option>
                                    <option value="AF">Bilhete de Identidade</option>
                                    <option value="AX">Carta de condução</option>
                                    <option value="AL">Cédula</option>
                                    <option value="DZ">Passaporte</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Número de documento <span class="required">*</span></label>
                                <input class="form-control border-form-control" name="document_name" placeholder="123456789123A" type="text">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>

                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Provincia <span class="required">*</span></label>
                                <input name="province"  class="form-control border-form-control" placeholder="Insira a província de residência" type="text"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Distrito <span class="required">*</span></label>
                                <input name="district" class="form-control border-form-control" placeholder="Insira o distrito de residência" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Bairro <span class="required">*</span></label>
                                <input class="form-control border-form-control" value="" name="neighborhood" placeholder="Insira o bairro de residência" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Rua <span class="required">*</span></label>
                                <input class="form-control border-form-control" value="" name="street" placeholder="Insira a rua da residência" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Avenida <span class="required">*</span></label>
                                <input class="form-control border-form-control" name="avenue" placeholder="Insira a avenida de residência" type="text" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Quarteirao <span class="required">*</span></label>
                                <input class="form-control border-form-control" value="" name="block" placeholder="Insira o quarteirão da residência" type="text">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Próximo</button>

                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3> Step 3</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Número da casa <span class="required">*</span></label>
                                    <input class="form-control border-form-control" value="" name="place_number" placeholder="123456" type="number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Tipo de funcionário <span class="required">*</span></label>
                                    <select name="employee_type_id"  class="custom-select">
                                        @foreach($employee_types as $employee_type)
                                            <option value="{{$employee_type->id}}">{{$employee_type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Departamento <span class="required">*</span></label>
                                    <select name="department_id"  class="custom-select">
                                        @foreach($departments as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="gender" value="M">
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="button" class="btn btn-danger border-none"> Cancelar </button>
                                <button type="submit" class="btn btn-success border-none"> Salvar alterações </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

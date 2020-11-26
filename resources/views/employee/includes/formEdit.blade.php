<div class="card-block">
    <div class="container-fluid">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Passo 1</p>
                </div>
            </div>
        </div>
        <form method="POST" action="/employees/{{$employee->id}}">
            @csrf
            @method('PUT')
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Primeiro nome <span class="required">*</span></label>
                                <input class="form-control border-form-control" required="required" name="name" value="{{$employee->name}}" placeholder="Insira primeiro nome" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Apelido <span class="required">*</span></label>
                                <input class="form-control border-form-control"  required="required" name="surname" value="{{$employee->surname}}" placeholder="Insira apelido" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Telefone <span class="required">*</span></label>
                                <input class="form-control border-form-control" value="{{$employee->telefone}}"  name="telefone" placeholder="+258 8X XXX XX XX" type="number">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label"> <span class="required">Nacionalidade</span></label>
                                <input  name="nationality" class="form-control border-form-control" value="{{$employee->nationality}}" placeholder="Insira a nacionalidade" type="text"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-danger border-none"> Cancelar </button>
                            <button type="submit" class="btn btn-success border-none"> Salvar alterações </button>
                        </div>
                    </div>

                </div>
            </div>

        </form>

        <form method="POST" action="/employees/{{$employee->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-success border-none"> Apagar </button>
        </form>
    </div>
</div>

<form method="POST" action="{{ route('employee-types.store') }}">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label class="control-label">Nome do tipo <span class="required">*</span></label>
                <input class="form-control border-form-control" name="name" value="" placeholder="Insira o tipo de funcionário" type="text">
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label class="control-label">Descrição <span class="required">*</span></label>
                <input class="form-control border-form-control"  name="description" value="" placeholder="Insira a descrição" type="text">
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

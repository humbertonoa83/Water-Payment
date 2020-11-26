<div class="modal fade" id="default-Modal-createClient" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar tipo de cliente</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('client-types.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Nome <span class="required">*</span></label>
                                <input class="form-control border-form-control" name="name" value="" placeholder="Insira o nome do tipo de cliente..." type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Descrição <span class="required">*</span></label>
                                <input class="form-control border-form-control"  name="description" value="" placeholder="Insira um descrição do tipo do cliente..." type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-danger border-none" data-dismiss="modal"> Cancelar </button>
                            <button type="submit" class="btn btn-success border-none"> Adicionar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

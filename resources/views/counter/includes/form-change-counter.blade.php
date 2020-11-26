<div class="card-block">
    <form method="POST" action="{{ route('counters.store') }}">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Nome do Cliente <span class="required">*</span></label>
                    <input class="form-control border-form-control" name="name" value="" placeholder="Insira um nome para o contador" type="text">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Contador Recente <span
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
                <div class="form-group">
                    <label class="control-label">Novo Contador<span
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
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label">Causa da Troca<span class="required">*</span></label>
                    <input class="form-control border-form-control" name="name" value="" placeholder="Insira um nome para o contador" type="text">
                </div>
            </div>
        </div>
       <div class="row">
           <div class="col-sm-12">
               <div class="form-group">
                   <label class="control-label">Comentario<span class="required">*</span></label>
                   <input class="form-control border-form-control" name="name" value="" placeholder="Insira um nome para o contador" type="text">
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

<div class="modal fade" id="default-Modal-mpesa" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('sell-recharges.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Escolha o contador</label>
                                <select name="counter_id" class="custom-select">
                                    @foreach($counters as $counter)
                                        <option value="{{$counter->id}}">{{$counter->reference}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Forma de pagamento</label>
                                <select name="payment_type" class="custom-select">
                                    <option value="M-pesa">M-pesa</option>
                                    <option value="Cartão de Crédito">Cartão de Crédito</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Escolha o valor da recarga</label>
                                <input class="form-control l" name="value" value="" placeholder="Insira o seu primeiro nome" type="text">
                            </div>
                        </div>
                    </div>

                    <input value="1" name="via" type="hidden">
                    <div class="row">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-danger border-none" data-dismiss="modal"> Cancelar </button>
                            <button type="submit" class="btn btn-success border-none" > Salvar alterações </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

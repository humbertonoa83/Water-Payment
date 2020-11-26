<div class="modal fade" id="default-Modal-second" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('second.via') }}">
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
                    <input value="2" name="via" type="hidden">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-danger border-none" data-dismiss="modal"> Cancelar </button>
                            <button type="submit" class="btn btn-success border-none"> Obter </button>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>

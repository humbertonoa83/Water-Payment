<div class="user-body">
    <div class="row">
        <div class="col-sm-6">
            <div class="p-20 text-center">
                <a data-toggle="pill" href="#novo-contador" role="tab"
                   class="btn btn-danger waves-effect">Nova Contador</a>
            </div>
        </div>
    </div>
    <ul class="page-list nav nav-tabs flex-column" id="pills-tab" role="tablist">
        <li class="nav-item mail-section">
            <a class="nav-link waves-effect d-block active" data-toggle="pill" href="#e-starred" role="tab">
                <i class="icofont icofont-inbox"></i> Todos Contadores
                <span class="label label-primary float-right">{{count($counters)}}</span>
            </a>
        </li>

        <li class="nav-item mail-section">
            <a class="nav-link waves-effect d-block" data-toggle="pill" href="#statistics" role="tab">
                <i class="fa fa-area-chart"></i> Estatisticas
            </a>
        </li>
    </ul>

</div>

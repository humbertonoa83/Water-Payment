<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">MENU DE NAVEGAÇÃO</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="/" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="/profile" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                        <span class="pcoded-mtext">Dados Pessoais</span>
                    </a>
                </li>

                @role('operator|admin|super-admin')
                <li class="pcoded-hasmenu">
                    <a href="/clients" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                        <span class="pcoded-mtext">Clientes</span>

                    </a>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="/counters" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-fax"></i></span>
                        <span class="pcoded-mtext">Contadores</span>

                    </a>
                </li>
                @endrole

                @role('client|admin|super-admin|operator')
                <li class="pcoded-hasmenu">
                    <a href="/recharges" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                        <span class="pcoded-mtext">Recargas</span>

                    </a>
                </li>
                @endrole

                @role('operator|admin|super-admin')
                <li class="pcoded-hasmenu">
                    <a href="/tariffs" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-balance-scale"></i></span>
                        <span class="pcoded-mtext">Tarifas</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="/employees" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-american-sign-language-interpreting"></i></span>
                        <span class="pcoded-mtext">Funcionários</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="/departaments" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-balance-scale"></i></span>
                        <span class="pcoded-mtext">Departamento</span>
                    </a>
                </li>

                @endrole
            </ul>

        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->

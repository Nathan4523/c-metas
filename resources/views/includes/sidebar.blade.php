<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{asset('images/logo/logo-transparente.png') }}" alt="logo" class="logo-menu">
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="{{route('home')}}">
                            <i class="ti-dashboard"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('carteira.index')}}">
                            <i class="fas fa-wallet"></i><span>Minha carteira</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('metas.index')}}">
                            <i class="fas fa-tasks"></i><span>Metas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('metas.create')}}">
                            <i class="fas fa-plus"></i><span>Novas metas</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

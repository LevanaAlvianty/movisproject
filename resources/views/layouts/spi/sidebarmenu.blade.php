    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
            <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
            </div>
        </div>
        <ul class="app-menu">
        @if(Request::is('spi*'))
            <li class="">
                <a class="app-menu__item {{ Request::is('spi/dashboard') ? 'active' : '' }}" href="{{ route('spi.dashboard') }}">
                    <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a class="app-menu__item {{ Request::is('spi/proposal*') ? 'active':  '' }}" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-file-text-o"></i><span class="app-menu__label">Proposal</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item {{ Request::routeIs('spi.proposal.index') ? 'active':  '' }}" href="{{ route('spi.proposal.index') }}"><i class="icon fa fa-circle-o"></i> Buat Proposal</a></li>
                    <li><a class="treeview-item {{ Request::routeIs('spi.proposal.daftar') ? 'active':  '' }}" href="{{ route('spi.proposal.daftar') }}"><i class="icon fa fa-circle-o"></i> Daftar Proposal</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Laporan</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Buat Laporan</a></li>
                    <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Daftar Laporan</a></li>
                </ul>
            </li>
            @endif
        </ul>
    </aside>
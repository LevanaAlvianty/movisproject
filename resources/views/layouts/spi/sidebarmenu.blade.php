    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
            <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
            </div>
        </div>
        <ul class="app-menu">
        @php
            $admin = Auth::guard('pegawai')->user()->isAdmin();
            $pic = Auth::guard('pegawai')->user()->isPic();
        @endphp
        <!-- Admin -->
        @if($admin == 1)
            <li class="treeview">
                <a class="app-menu__item " href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-group"></i><span class="app-menu__label">Pegawai</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item " href=""><i class="icon fa fa-circle-o"></i> Manage Pegawai</a></li>
                    <li><a class="treeview-item " href=""><i class="icon fa fa-circle-o"></i> Setting Pegawai</a></li>
                </ul>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('adminperencanaan/kegiatanpo*') ? 'active':  '' }}" href="{{ route('kegiatanpo.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Kegiatan PO</span>
                </a>
            </li>
        @endif

        <!-- PIC --> 
        @if($pic == 1)
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
                    <li><a class="treeview-item {{ Request::routeIs('proposal.index') ? 'active':  '' }}" href="{{ route('proposal.index') }}"><i class="icon fa fa-circle-o"></i> Buat Proposal</a></li>
                    <li><a class="treeview-item {{ Request::routeIs('proposal.daftar') ? 'active':  '' }}" href="{{ route('proposal.daftar') }}"><i class="icon fa fa-circle-o"></i> Daftar Proposal</a></li>
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
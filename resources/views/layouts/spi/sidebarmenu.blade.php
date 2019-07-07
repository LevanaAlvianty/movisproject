    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
            <div>
            <p class="app-sidebar__user-name">{{ Auth::guard('pegawai')->user()->username}}</p>
            <p class="app-sidebar__user-designation">{{ Auth::guard('pegawai')->user()->jabatan }}</p>
            </div>
        </div>
        <ul class="app-menu">
        @php
            $admin = Auth::guard('pegawai')->user()->isAdmin();
            $pic = Auth::guard('pegawai')->user()->isPic();
            $pimpinan = Auth::guard('pegawai')->user()->isPimpinan();
            $reviewerspi = Auth::guard('pegawai')->user()->isReviewerspi();
            $revieweranggaran = Auth::guard('pegawai')->user()->isReviewerang();
            $adminspi = Auth::guard('pegawai')->user()->isAdminspi();
            $adminperencanaan = Auth::guard('pegawai')->user()->isAdminperencanaan();
        @endphp
        <!-- Admin -->
        @if($admin == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/pegawai*') ? 'active':  '' }}" href="{{ route('pegawai.index') }}">
                    <i class="app-menu__icon fa fa-group"></i><span class="app-menu__label">User</span>
                </a>
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
            <li class="">
                <a class="app-menu__item {{ Request::is('spi/kegiatan*') ? 'active':  '' }} 
                {{ Request::routeIs('proposal.index') ? 'active':  '' }} {{ Request::routeIs('proposal.editproposal') ? 'active':  '' }} " 
                href="{{ route('kegiatan.index') }}">
                    <i class="app-menu__icon fa fa-file-text-o"></i><span class="app-menu__label">Daftar Kegiatan</span>
                </a>
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

            @if($pimpinan == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('pimpinan/kegiatanpimpinan*') ? 'active':  '' }}" href="{{ route('kegiatanpimpinan.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Kegiatan PO</span>
                </a>
            </li>
            @endif

            <li class="">
                <a class="app-menu__item {{ Request::is('profil*') ? 'active':  '' }} 
                {{ Request::routeIs('profil.index') ? 'active':  '' }} " 
                href="{{ route('profil.index') }}">
                    <i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Setting</span>
                </a>
            </li>
        </ul>
    </aside>
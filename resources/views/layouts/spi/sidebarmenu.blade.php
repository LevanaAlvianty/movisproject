    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar img-fluid rounded-circle" width="60px" height="60px" src="{{asset('gambar/profil/'. Auth::guard('pegawai')->user()->photo)}}" alt="User Image">
            <div>
            <p class="app-sidebar__user-name">{{ Auth::guard('pegawai')->user()->username}}</p>
            <p class="app-sidebar__user-designation"></p>
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

        <li class="">
            <a class="app-menu__item {{ Request::routeIs('pegawai.home') ? 'active':  '' }}" href="{{ route('pegawai.home') }}">
                <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <!-- Admin -->
        @if($admin == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/pegawai*') ? 'active':  '' }}" href="{{ route('pegawai.index') }}">
                    <i class="app-menu__icon fa fa-group"></i><span class="app-menu__label">Master Pegawai</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/role*') ? 'active':  '' }}" href="{{ route('role.index') }}">
                    <i class="app-menu__icon fa fa-group"></i><span class="app-menu__label">Master Roles</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/pejabat*') ? 'active':  '' }}" href="{{ route('pejabat.index') }}">
                    <i class="app-menu__icon fa fa-group"></i><span class="app-menu__label">Master Pejabat</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/kelompokanggaran*') ? 'active':  '' }}" href="{{ route('kelang.index') }}">
                    <i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Master Kel. Anggaran</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/akun*') ? 'active':  '' }}" href="{{ route('akun.index') }}">
                    <i class="app-menu__icon fa fa-calculator"></i><span class="app-menu__label">Master Akun</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/satuan*') ? 'active':  '' }}" href="{{ route('satuan.index') }}">
                    <i class="app-menu__icon fa fa-calculator"></i><span class="app-menu__label">Master Satuan</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/renstra*') ? 'active':  '' }}" href="{{ route('renstra.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Master Renstra</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/programutama*') ? 'active':  '' }}" href="{{ route('programutama.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Master Program</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('adminperencanaan/kegiatanpo*') ? 'active':  '' }}" href="{{ route('kegiatanpo.index') }}">
                    <i class="app-menu__icon fa fa-file-text-o"></i><span class="app-menu__label">Kegiatan PO</span>
                </a>
            </li>
            
        @endif

        <!-- PIC --> 
        @if($pic == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('spi/kegiatan*') ? 'active':  '' }} 
                {{ Request::routeIs('proposal.index') ? 'active':  '' }} {{ Request::routeIs('proposal.editproposal') ? 'active':  '' }} " 
                href="{{ route('kegiatan.index') }}">
                    <i class="app-menu__icon fa fa-file-text-o"></i><span class="app-menu__label">Daftar Kegiatan</span>
                </a>
            </li>
            @endif

            @if($pimpinan == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('pimpinan/kegiatanpimpinan*') ? 'active':  '' }}" href="{{ route('kegiatanpimpinan.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Kegiatan PO</span>
                </a>
            </li>
            @endif

            @if($adminspi == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('adminspi/kegiatanadminspi*') ? 'active':  '' }}" href="{{ route('kegiatanadminspi.index') }}">
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
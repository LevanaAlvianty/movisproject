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
            $kabagkeuangan = Auth::guard('pegawai')->user()->isKabagKeuangan();
        @endphp

        <li class="">
            <a class="app-menu__item {{ Request::routeIs('pegawai.home') ? 'active':  '' }} {{ Request::routeIs('proposal.index') ? 'active':  '' }}
            {{ Request::routeIs('laporan.index') ? 'active':  '' }}" href="{{ route('pegawai.home') }}">
                <i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        
        <!-- Admin -->
        @if($admin == 1)
        <li class="treeview"><a class="app-menu__item {{ Request::is('admin/pegawai*') ? 'active':  '' }}
                {{ Request::is('admin/role*') ? 'active':  '' }} {{ Request::is('admin/pejabat*') ? 'active':  '' }}" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-group"></i><span class="app-menu__label">Master Pegawai </span>
                <i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li class="">
                        <a class="treeview-item {{ Request::is('admin/pegawai*') ? 'active':  '' }}" href="{{ route('pegawai.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Pegawai</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="treeview-item {{ Request::is('admin/role*') ? 'active':  '' }}" href="{{ route('role.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Roles</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="treeview-item {{ Request::is('admin/pejabat*') ? 'active':  '' }}" href="{{ route('pejabat.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Pejabat</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="treeview"><a class="app-menu__item {{ Request::is('admin/akun*') ? 'active':  '' }} {{ Request::is('admin/satuan*') ? 'active':  '' }}
                {{ Request::is('admin/kelompok-akun*') ? 'active':  '' }} {{ Request::is('admin/barang*') ? 'active':  '' }}" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-calculator"></i><span class="app-menu__label">Master Akun </span>
                <i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li>
                        <a class="treeview-item {{ Request::is('admin/akun*') ? 'active':  '' }}" href="{{ route('akun.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Akun</span>
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item {{ Request::is('admin/kelompok-akun*') ? 'active':  '' }}" href="{{ route('kelompok-akun.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Kelompok Akun</span>
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item {{ Request::is('admin/barang*') ? 'active':  '' }}" href="{{ route('barang.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Barang</span>
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item {{ Request::is('admin/satuan*') ? 'active':  '' }}" href="{{ route('satuan.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Satuan</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview"><a class="app-menu__item {{ Request::is('admin/renstra*') ? 'active':  '' }}
                {{ Request::is('admin/programutama*') ? 'active':  '' }} {{ Request::is('admin/indikator*') ? 'active':  '' }}" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Master Renstra </span>
                <i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li>
                        <a class="treeview-item {{ Request::is('admin/renstra*') ? 'active':  '' }}" href="{{ route('renstra.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Renstra</span>
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item {{ Request::is('admin/programutama*') ? 'active':  '' }}" href="{{ route('programutama.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Program Utama</span>
                        </a>
                    </li>
                    <li>
                        <a class="treeview-item {{ Request::is('admin/indikator*') ? 'active':  '' }}" href="{{ route('indikator.index') }}">
                            <i class="icon fa fa-circle-o"></i><span class="app-menu__label">Master Indikator Kerja</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('admin/kelompokanggaran*') ? 'active':  '' }} " href="{{ route('kelang.index') }}">
                    <i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Master Kel. Anggaran</span>
                </a>
            </li>
        @endif

        <!-- PIC --> 
        @if($pic == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('spi/kegiatan*') ? 'active':  '' }} {{ Request::routeIs('proposal.editproposal') ? 'active':  '' }} " 
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

        @if($adminperencanaan == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('adminperencanaan/kegiatanpo*') ? 'active':  '' }}" href="{{ route('kegiatanpo.index') }}">
                    <i class="app-menu__icon fa fa-file-text-o"></i><span class="app-menu__label">Kegiatan PO</span>
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

        @if($kabagkeuangan == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('kabagkeuangan/kegiatankabagkeuangan*') ? 'active':  '' }}" href="{{ route('kegiatankabagkeuangan.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Kegiatan PO</span>
                </a>
            </li>
        @endif

        @if($reviewerspi == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('reviewerspi/reviewproposal*') ? 'active':  '' }}" href="{{ route('reviewproposal.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Review Proposal Kegiatan</span>
                </a>
            </li>
            <li class="">
                <a class="app-menu__item {{ Request::is('reviewerspi/reviewlaporan*') ? 'active':  '' }}" href="{{ route('reviewerspi.reviewlaporan.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Review Laporan Kegiatan</span>
                </a>
            </li>
        @endif

        @if($revieweranggaran == 1)
            <li class="">
                <a class="app-menu__item {{ Request::is('reviewerspi/reviewproposal*') ? 'active':  '' }}" href="{{ route('reviewproposal.index') }}">
                    <i class="app-menu__icon fa fa-list-ul"></i><span class="app-menu__label">Review Proposal Kegiatan</span>
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
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div class="admin-info">
                <div class="font-strong">Administrator</div>
            </div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{ route('dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('users.index') }}"><i class="sidebar-item-icon fa fa-user-circle"></i>
                    <span class="nav-label">Manajemen Pengguna</span>
                </a>
            </li>
            <li>
                <a href="{{ route('roles.index') }}"><i class="sidebar-item-icon fa fa-address-card-o"></i>
                    <span class="nav-label">Manajemen Role</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pegawais.index') }}"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Manajemen Pegawai</span>
                </a>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Penyimpanan</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('ruangan.index')}}">Ruangan</a>
                    </li>
                    <li>
                        <a href="{{route('lemari.index')}}">Lemari</a>
                    </li>
                    <li>
                        <a href="{{route('rak.index')}}">Rak</a>
                    </li>
                    <li>
                        <a href="{{route('box.index')}}">Box</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="{{ route('kategori.index') }}"><i class="sidebar-item-icon fa fa-pie-chart"></i>
                    <span class="nav-label">Manajemen Kategori</span>
                </a>
            </li>
            <li>
                <a href="{{ route('tabelarsips.index') }}"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Manajemen Arsip</span>
                </a>
            </li>

            {{-- <li>
                <a href="{{ route('pencarianarsip.index') }}"><i class="sidebar-item-icon fa fa-search"></i>
                    <span class="nav-label">Pencarian Arsip</span>
                </a>
            </li> --}}


        </ul>
    </div>
</nav>

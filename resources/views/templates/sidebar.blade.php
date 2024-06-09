<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="./templates/assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">James Brown</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('pegawais.index')}}"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Pegawai</span>
                </a>
            </li>

            <li>
                <a href="{{route('kategori.index')}}"><i class="sidebar-item-icon fa fa-pie-chart"></i>
                    <span class="nav-label">Kategori</span>
                </a>
            </li>

            <li>
                <a href="{{route('tabelarsips.index')}}"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Tabel Arsip</span>
                </a>
            </li>

            <li>
                <a href="{{route('pencarianarsip.index')}}"><i class="sidebar-item-icon fa fa-search"></i>
                    <span class="nav-label">Pencarian Arsip</span>
                </a>
            </li>

            <li>
                <a href="{{route('users.index')}}"><i class="sidebar-item-icon fa fa-user-circle"></i>
                    <span class="nav-label">Pengguna</span>
                </a>
            </li>

            <li>
                <a href="{{route('roles.index')}}"><i class="sidebar-item-icon fa fa-address-card-o"></i>
                    <span class="nav-label">Manajemen Pengguna</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
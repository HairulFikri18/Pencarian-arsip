<header class="header">
    <div class="page-brand">
        <a class="link" href="index.html">
            <span class="brand">Admin
                <span class="brand-tip">CAST</span>
            </span>
            <span class="brand-mini">AC</span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">

            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="./templates/assets/img/admin-avatar.png" />
                    <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    {{-- <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a> --}}
                    {{-- <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a> --}}
                    {{-- <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a> --}}
                    <li class="dropdown-divider"></li>
                    <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>

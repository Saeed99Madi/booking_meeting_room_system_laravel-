<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3">Faculty<sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    @if(auth()->user()->userHasRole('admin'))
        <x-admin.user-managment></x-admin.user-managment>
    @endif

    <x-admin.rooms-link></x-admin.rooms-link>
    <x-admin.events-link></x-admin.events-link>
    <x-admin.calender-link></x-admin.calender-link>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Auth
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">--}}
{{--                <i class="fas fa-fw fa-folder"></i>--}}
{{--                <span>Pages</span>--}}
{{--            </a>--}}
{{--            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">--}}
{{--                <div class="bg-white py-2 collapse-inner rounded">--}}
{{--                    <h6 class="collapse-header">Login Screens:</h6>--}}
{{--                    <a class="collapse-item" href="login.html">Login</a>--}}
{{--                    <a class="collapse-item" href="register.html">Register</a>--}}
{{--                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>--}}
{{--                    <div class="collapse-divider"></div>--}}
{{--                    <h6 class="collapse-header">Other Pages:</h6>--}}
{{--                    <a class="collapse-item" href="404.html">404 Page</a>--}}
{{--                    <a class="collapse-item" href="blank.html">Blank Page</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}

{{--        <!-- Nav Item - Charts -->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="charts.html">--}}
{{--                <i class="fas fa-fw fa-chart-area"></i>--}}
{{--                <span>Charts</span></a>--}}
{{--        </li>--}}

{{--        <!-- Nav Item - Tables -->--}}
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="tables.html">--}}
{{--                <i class="fas fa-fw fa-table"></i>--}}
{{--                <span>Tables</span></a>--}}
{{--        </li>--}}

<!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a href="" class="nav-link collapsed" aria-expanded="true"><i class="fa-fw fas fa-key c-sidebar-nav-icon">
            </i>Change Password</a>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                             class="nav-link collapsed"
                             aria-expanded="true"
                             onclick="event.preventDefault();
                        this.closest('form').submit();"><i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">
                </i>
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </li>
{{--        c--}}
{{--            <a href="{{route('logout')}}" class="nav-link collapsed" aria-expanded="true"><i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">--}}
{{--                </i>Logout</a>--}}
{{--        </li>--}}


<!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

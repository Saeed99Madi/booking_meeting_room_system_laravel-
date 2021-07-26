
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usermanagement" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa-fw fas fa-users c-sidebar-nav-icon"></i>
        <span>User Management</span>
    </a>
    <div id="usermanagement" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">User Management:</h6>
            <a class="collapse-item" href="{{route('roles.index')}}"><i class="fa-fw fas fa-briefcase c-sidebar-nav-icon"></i>Roles</a>
            <a class="collapse-item" href="#"><i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon"></i>Permissions</a>
            <a class="collapse-item" href="{{route('users.index')}}"><i class="fa-fw fas fa-user c-sidebar-nav-icon"></i>Users</a>
            <a class="collapse-item" href="#">Others</a>
        </div>
    </div>
</li>

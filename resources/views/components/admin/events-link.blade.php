
{{--<!-- Nav Item - Utilities Collapse Menu -->--}}
{{--<li class="nav-item">--}}
{{--    <a href="{{route}}" class="nav-link collapsed" aria-expanded="true"><i class="fa-fw fas fa-cogs c-sidebar-nav-icon"></i>Events</a>--}}
{{--</li>--}}


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapsethree">
        <i class="fas fa-fw fa-cog"></i>
        <span>Bookings</span>
    </a>
    <div id="collapsethree" class="collapse" aria-labelledby="headingUTow" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bookings</h6>
            <a class="collapse-item" href="{{route('bookings.showall')}}"><i class="fa-fw fas fa-briefcase c-sidebar-nav-icon"></i>Bookings</a>
{{--            <a class="collapse-item" href="{{route('rooms.')}}"><i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon"></i>Create Room</a>--}}
            <a class="collapse-item" href="#">Others</a>
        </div>
    </div>
</li>

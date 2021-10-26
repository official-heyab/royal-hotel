<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text mx-3"><sup>Admin </sup>interface</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item -->
    <li class="nav-item
        {{ (Route::currentRouteName() == 'dashboard' || Route::currentRouteName() == 'home' )
        ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i><span>Home</span>
        </a>
    </li>

    <li class="nav-item {{ (Route::currentRouteName() == 'admin.services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.services') }}">
            <i class="fas fa-fw fa-building"></i><span>Services</span>
        </a>
    </li>

    <li class="nav-item {{ (Route::currentRouteName() == 'admin.rooms') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.rooms') }}">
            <i class="fas fa-fw fa-user"></i><span>Rooms</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{  asset('sb-theme/img/undraw_rocket.svg') }}" alt="...">
        <p class="text-center mb-2"><strong>Royal Hotel </strong> mobile app is coming soon...</p>
        <a class="btn btn-success btn-sm" target="_blank" href="{{ route('home') }}">View Website</a>
    </div>

</ul>

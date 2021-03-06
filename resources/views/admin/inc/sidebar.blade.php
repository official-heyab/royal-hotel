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

    @can('can_view_room_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.rooms') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.rooms') }}">
            <i class="lnr lnr-calendar-full"></i><span>Room Reservations</span>
        </a>
    </li>
    @endcan

    @can('can_view_conference_hall_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.hall') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.hall') }}">
            <i class="lnr lnr-apartment"></i><span>Conference Hall Reservations</span>
        </a>
    </li>
    @endcan

    @can('can_view_service_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.services') }}">
            <i class="lnr lnr-layers"></i><span>Other Service Reservations</span>
        </a>
    </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    @can('can_view_food_menu')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.menu') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.menu') }}">
            <i class="lnr lnr-cart"></i><span>Food & Drinks</span>
        </a>
    </li>
    @endcan

    @can('can_view_services')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.services') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.services') }}">
            <i class="lnr lnr-layers"></i><span>Services</span>
        </a>
    </li>
    @endcan

    @can('can_view_rooms')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.rooms') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.rooms') }}">
            <i class="lnr lnr-calendar-full"></i><span>Rooms</span>
        </a>
    </li>
    @endcan

    @can('can_view_conference_halls')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.halls') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.halls') }}">
            <i class="lnr lnr-apartment"></i><span>Conference Halls</span>
        </a>
    </li>
    @endcan

    @can('can_view_users')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.users') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.users') }}">
            <i class="lnr lnr-users"></i><span>Users</span>
        </a>
    </li>
    @endcan

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    @can('can_view_menu_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.menu') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.menu') }}">
            <i class="lnr lnr-cart"></i><span>Food & Drink Orders</span>
        </a>
    </li>
    @endcan

    @can('can_view_beauty_salon_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.beauty') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.beauty') }}">
            <i class="lnr lnr-store"></i><span>Beauty Salon Reservations</span>
        </a>
    </li>
    @endcan

    @can('can_view_gym_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.gym') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.gym') }}">
            <i class="lnr lnr-enter"></i><span>GYM Reservations</span>
        </a>
    </li>
    @endcan

    @can('can_view_laundry_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.laundry') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.laundry') }}">
            <i class="lnr lnr-shirt"></i><span>Laundry Reservations</span>
        </a>
    </li>
    @endcan

    @can('can_view_swimming_pool_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.pool') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.pool') }}">
            <i class="lnr lnr-drop"></i><span>Swimming Pool Reservations</span>
        </a>
    </li>
    @endcan

    @can('can_view_personal_trainer_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.trainer') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.trainer') }}">
            <i class="lnr lnr-bicycle"></i><span>Personal Trainer Reservations</span>
        </a>
    </li>
    @endcan

    @can('can_view_dinner_table_reservations')
    <li class="nav-item {{ (Route::currentRouteName() == 'admin.waiting.table') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.waiting.table') }}">
            <i class="lnr lnr-dinner"></i><span>Dinner Table Reservations</span>
        </a>
    </li>
    @endcan
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

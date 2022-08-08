
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/dashboard')}}">
                <div class="sidebar-brand-text mx-3"><img src="{{asset('admin/img/logo.png')}}" alt="" height="35vh"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Nav Item - Countries -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/countries')}}">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Countries</span></a>
            </li>
            <!-- Nav Item - Ports -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/ports')}}">
                    <i class="fas fa-fw fa-map-marker-alt"></i>
                    <span>Ports</span></a>
            </li>
            <!-- Nav Item - Containers -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/containers')}}">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Containers</span></a>
            </li>
            <!-- Nav Item - Bookings -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/bookings')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Bookings</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->
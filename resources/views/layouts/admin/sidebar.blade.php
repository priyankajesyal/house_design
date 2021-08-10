<ul class=" navbar-nav bg-gradient-primary sidebar sidebar-dark accordion  " id="accordionSidebar">



    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">

        <div class="mx-3 sidebar-brand-text">Admin </div>
    </a>

    <!-- Divider -->
    <hr class="my-0 sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-user"></i>

            <span>Users</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('banners.index') }}">
            <i class="fas fa-flag"></i>
            <span>Banners</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('portfolio.index') }}">
            <i class="fas fa-file-powerpoint"></i>
            <span>Portfolio</span></a>
    </li>


    <li class="nav-item active">
        <a class="nav-link" href="{{ route('proposal.index') }}">
            <i class="fas fa-hands-helping"></i>
            <span>Proposal</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('bank-details.index') }}">
            <i class="fas fa-university"></i>

            <span>Bank Details</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>

</ul>

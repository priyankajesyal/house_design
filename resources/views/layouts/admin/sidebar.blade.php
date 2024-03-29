<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="mx-3 sidebar-brand-text">{{ config('app.name') }} </div>
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
        <a class="nav-link" href="{{ route('portfolio.index') }}">
            <i class="fas fa-file-powerpoint"></i>
            <span>Portfolio</span></a>
    </li>


    <li class="nav-item active">
        <a class="nav-link" href="{{ route('proposal.index') }}">
            <i class="far fa-heart"></i>
            <span>Proposal</span></a>
    </li>


    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

            <span>All Categories</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="py-2 bg-white rounded collapse-inner">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="">Categories</a>
                <a class="collapse-item" href="">Sub Categories</a>

            </div>
        </div>
    </li> --}}

{{-- 
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fab fa-pinterest-p"></i>
            <span>Product</span></a>
    </li> --}}





    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="border-0 rounded-circle" id="sidebarToggle"></button>
    </div>



</ul>


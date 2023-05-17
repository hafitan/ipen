<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">diGARUTa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Heading -->


    <!-- Nav Item - Pages Collapse Menu -->


    <!-- Nav Item - Utilities Collapse Menu -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
@if (Auth::user()->role == 'admin')
<li class="nav-item">
    <a class="nav-link" href="penduduk">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Penduduk</span></a>
</li>

<!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="/bank-sampah">
            <i class="fas fa-fw fa-table"></i>
            <span>Bank Sampah</span></a>
    </li>


<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="/bumdes">
        <i class="fas fa-fw fa-table"></i>
        <span>Bumdes</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="users">
        <i class="fas fa-fw fa-table"></i>
        <span>User</span></a>
</li>


@elseif(Auth::user()->role == 'banksampah')
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="/bank-sampah">
        <i class="fas fa-fw fa-table"></i>
        <span>Bank Sampah</span></a>
</li>

@elseif(Auth::user()->role == 'bumdes')
<li class="nav-item">
    <a class="nav-link" href="/bumdes">
        <i class="fas fa-fw fa-table"></i>
        <span>Bumdes</span></a>
</li>
@elseif(Auth::user()->role == 'penduduk')
<li class="nav-item">
    <a class="nav-link" href="penduduk">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Penduduk</span></a>
</li>
@elseif(Auth::user()->role == 'user')
    <li class="nav-item">
        <a class="nav-link" href="penduduk-view">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Penduduk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="bumdes-view">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Bumdes</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="bank-sampah-view">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Bank sampah</span></a>
    </li>
@endif
    <!-- Nav Item - Charts -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>

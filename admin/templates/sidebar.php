<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASEURL ?>/admin/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Perpustakaan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>/admin/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Divisi Buku
    </div>

    <!-- Nav Item - Books -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>/admin/books/">
            <i class="fas fa-fw fa-book"></i>
            <span>Books</span></a>
    </li>
    
    <!-- Nav Item - Racks -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>/admin/racks/">
            <i class="fas fa-fw fa-box"></i>
            <span>Racks</span></a>
    </li>
    
    <!-- Nav Item - Category -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>/admin/category/">
            <i class="fas fa-fw fa-archive"></i>
            <span>Category</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Divisi User
    </div>
    
    <!-- Nav Item - Users -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>/admin/users/">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaturan
    </div>
    
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings"
            aria-expanded="true" aria-controls="collapseSettings">
            <i class="fas fa-fw fa-cog"></i>
            <span>Disabled</span>
        </a>
        <div id="collapseSettings" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>
</ul>
<!-- End of Sidebar -->
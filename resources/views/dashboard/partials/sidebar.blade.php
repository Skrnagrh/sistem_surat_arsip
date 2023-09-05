<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-2 d-flex">
        <div class="image">
            <img src="/logo/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block text-capitalize" onclick="location.reload();">PT. Indah persada tech</a>
        </div>

    </div>

    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-header text-uppercase">Dashboard</li>

            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt nav-icon"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-header text-uppercase">Arsip</li>

            <li class="nav-item">
                <a href="/dashboard/masuk" class="nav-link {{ Request::is('dashboard/masuk*') ? 'active' : '' }}">
                    <i class="fas fa-envelope nav-icon"></i>
                    <p>Surat Masuk</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/dashboard/keluar" class="nav-link {{ Request::is('dashboard/keluar*') ? 'active' : '' }}">
                    <i class="fas fa-paper-plane nav-icon"></i>
                    <p>Surat Keluar</p>
                </a>
            </li>

            @if (Auth::user()->is_admin == '1')

            <li class="nav-header text-uppercase">Menu Admin</li>

            <li class="nav-item">
                <a href="/dashboard/semua" class="nav-link {{ Request::is('dashboard/semua*') ? 'active' : '' }}">
                    <i class="fas fa-archive nav-icon"></i>
                    <p>All Arsip</p>
                </a>
            </li>


            <li class="nav-item">
                <a href="/datapengguna" class="nav-link {{ Request::is('datapengguna*') ? 'active' : '' }}">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Data Petugas</p>
                </a>
            </li>
            @endif

        </ul>
    </nav>

</div>
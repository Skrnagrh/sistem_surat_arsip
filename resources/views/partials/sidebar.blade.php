<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-light">Core</div>
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-gauge"></i>
                    </div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading text-light">Interface</div>
                <a class="nav-link {{ Request::is('dashboard/masuk*') ? 'active' : '' }}" href="/dashboard/masuk">
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i>
                    </div>
                    Arsip Masuk
                </a>
                <a class="nav-link {{ Request::is('dashboard/keluar*') ? 'active' : '' }}" href="/dashboard/keluar">
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope-open"></i>
                    </div>
                    Arsip Keluar
                </a>

                @if (Auth::user()->is_admin == '1')
                    <div class="sb-sidenav-menu-heading text-light">Admin</div>
                    <a class="nav-link {{ Request::is('dashboard/semua*') ? 'active' : '' }}" href="/dashboard/semua">
                        <div class="sb-nav-link-icon"><i class="fas fa-envelopes-bulk"></i>
                        </div>
                        Semua Arsip
                    </a>
                    <a class="nav-link {{ Request::is('datapengguna*') ? 'active' : '' }}" href="/datapengguna">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Data Petugas
                    </a>
                @endif

            </div>
        </div>
    </nav>
</div>

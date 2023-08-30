<nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            {{ Auth()->user()->name }} <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                <span class="dropdown-item dropdown-header">{{ Auth()->user()->name }} </span>

                <div class="dropdown-divider"></div>

                <a href="/" class="dropdown-item">
                    <i class="fas fa-home mr-2"></i> Homepage
                </a>

                <div class="dropdown-divider"></div>

                <a href="/userprofile" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> Profile
                </a>

                <div class="dropdown-divider"></div>

                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#confirmLogoutModal">
                    <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                </button>

                <div class="dropdown-divider"></div>

            </div>
        </li>
    </ul>
</nav>

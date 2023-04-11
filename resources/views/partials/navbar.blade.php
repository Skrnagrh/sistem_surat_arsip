{{-- <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none  mr-3">
                <i class="fa fa-bars bg-light"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>



                <div class="text-center border- text-primary mt-4">
                    <span id="date_time" class="px-2 py-3"></span>
                </div>


                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow text-dark">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-3 d-none d-lg-inline text-dark"
                            style="text-transform: uppercase"><strong>{{ auth()->user()->name }}</strong></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-person-fill text-dark" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        @auth

                            <a class="dropdown-item" href="/dashboard/profile">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"
                                    onclick="return confirm('Are you sure you want to leave?')">
                                    <i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        @endauth
                    </div>
                </li>

            </ul>

    </nav>

        <script type="text/javascript" src="/js/datetime.js"></script>
        <script type="text/javascript">
            window.onload = date_time('date_time');
</script> --}}

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
    <a class="navbar-brand ps-3"><img src="/logo/logo1.png" alt="logo" width="100%">
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        {{-- <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div> --}}
    </form>

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            {{-- <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" --}}
            <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">{{ auth()->user()->name }}
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/userprofile"><i class="fas fa-user"></i> Profile</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item px-3 bg-light  border-0 text-dark"
                            onclick="return confirm('Apakah anda yakin ingin keluar')">
                            <i class="fas fa-person-walking-dashed-line-arrow-right"></i> Keluar</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>

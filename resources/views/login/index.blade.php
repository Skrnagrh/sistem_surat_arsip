<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="/login/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Sistem Surat Arsip | Login</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="/logo/logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/login/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/login/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/login/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/login/css/demo.css" />
    <link rel="stylesheet" href="/login/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/login/vendor/css/pages/page-auth.css" />
    <script src="/login/vendor/js/helpers.js"></script>
    <script src="/login/js/config.js"></script>
</head>

<body class="bg-primary">

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center">
                            <a href="/login" class="app-brand-link gap-2">
                                <img src="/logo/logo.png" width=100px />
                            </a>
                        </div>
                        <div class="app-brand justify-content-center">
                            <h4 class="mb-2 Text-center text-uppercase">Sistem Surat Arsip</h4>
                        </div>
                        <form id="formAuthentication" class="mb-3" action="/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Nomor Induk Pegawai</label>
                                <input type="text" class="form-control @error('induk') is-invalid @enderror"
                                    name="induk" placeholder="Id Karyawan" value="{{ old('induk') }}" required
                                    autofocus>
                                @error('induk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                {{-- <input type="text" class="form-control" id="email" name="email-username"
                                    placeholder="Enter your email or username" /> --}}
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="Password" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')

    <script src="/login/vendor/libs/jquery/jquery.js"></script>
    <script src="/login/vendor/libs/popper/popper.js"></script>
    <script src="/login/vendor/js/bootstrap.js"></script>
    <script src="/login/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/login/vendor/js/menu.js"></script>
    <script src="/login/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>

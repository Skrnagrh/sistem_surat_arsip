{{-- @extends('layouts.main')


@section('content')
    
<div class="container my-4">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                        <div class="col-lg-12 p-5">
                                <div class="text-center">
                                    <img src="/logo/PT-Samudra-marine-Indonesia.png" width="30%" height="40%">
                                    <h1 class="h4 text-dark my-3">
                                    <strong>PT. SAMUDRA MARINE INDONESIA</strong>
                                    </h1>
                                    <hr>
                                </div>

                                <form action="/" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="induk" class="text-dark"><strong>No Induk Karyawans</strong></label>
                                        <input type="induk" class="form-control"
                                            id="induk" name="induk" placeholder="Enter induk Address..." >
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-dark"><strong>Password</strong></label>
                                        <input type="password" class="form-control "
                                            id="password" name="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                        </div>
                </div>
            </div>

        </div>

    </div>

</div>
    @include('sweetalert::alert')
    @endsection --}}

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/logo/PT-Samudra-marine-Indonesia.png" rel="icon">
    <title>SMI | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/login/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/login/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/login/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="hold-transition login-page bg-primary">
    <div class="login-box">
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <a href="/">
                        <font color="blue">
                            <strong>PT. SAMUDRA MARINE INDONESIA</strong>
                        </font>
                    </a>
                </div>
                <center>
                    <img src="/logo/PT-Samudra-marine-Indonesia.png" width=180px />
                    <br>
                    <br>
                </center>
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="induk" placeholder="Id Karyawan"
                            value="{{ old('induk') }}" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <a href="/" class="btn btn-danger btn-block btn-flat" name="btnLogin"
                                title="Masuk Sistem">
                                <b><i class="fas fa-arrow-left"></i> Batal</b>
                            </a>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block btn-flat" name="btnLogin"
                                title="Masuk Sistem">
                                <b><i class="fas fa-person-walking-dashed-line-arrow-right"></i> Masuk</b>
                            </button>
                        </div>
                </form>

            </div>
        </div>
    </div>

    @include('sweetalert::alert')
    <script src="/login/plugins/jquery/jquery.min.js"></script>
    <script src="/login/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/login/dist/js/adminlte.min.js"></script>
    <script src="/login/plugins/alert.js"></script>

</body>

</html>

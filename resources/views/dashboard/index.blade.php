@extends('layouts.dashboard')

@section('content')
    <style>
        .colom-kartu {
            margin-top: -20%;
            border: none
        }

        .colom-kartu-1 {
            margin-top: -13%;
            border: none
        }

        .kartu {
            width: 80px;
            height: 50px;
            justify-content: center;
            text-align: center;
            border: none
        }

        a {
            text-decoration: none
        }
    </style>
    {{-- <div class="container-fluid">

        <hr class="bg-primary">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="mb-0 text-dark"><strong>Dashboard By <a href="/dashboard/profile"
                        class="text-decoration-none text-dark">{{ auth()->user()->name }}</strong></a></h2>
        </div>
        <hr class="bg-primary">

        <div class="row">
            <div class="col-xl-6 col-md-4 mb-4">
                <a href="/dashboard/masuk" class="text-decoration-none">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        <h5>{{ $total_masuk }}</h5>
                                        <h4><strong> Surat Masuk</strong></h4>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-envelope fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-6 col-md-4 mb-4">
                <a href="/dashboard/keluar" class="text-decoration-none">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        <h5>{{ $total_keluar }}</h5>
                                        <h4><strong>Surat Keluar</strong></h4>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-envelope-open fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            @can('admin')
                <div class="col-xl-6 col-md-4 mb-4">
                    <a href="/dashboard/semua" class="text-decoration-none">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            <h5>{{ $total_semua }}</h5>
                                            <h4><strong>Semua Arsip</strong></h4>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-inbox fa-2x text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-md-4 mb-4">
                    <a href="/dashboard/datapetugas" class="text-decoration-none">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <h5>{{ $total_petugas }}</h5>
                                            <h4><strong>Data Petugas</strong></h4>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endcan
        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Primary Card</div>
                <div class="card-body">{{ $total_masuk }}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Warning Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Success Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Danger Card</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div> --}}

    <h1 class="mt-4">Dashboard {{ auth()->user()->name }}</h1>
    <hr>


    @if (Auth::user()->is_admin == '1')
        <div class="row">
            <div class="col-md-3 mt-5">
                <a href="/dashboard/masuk" class="text-primary">
                    <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                        <div class="row justify-content-between">
                            <div class="col-md-3 colom-kartu">
                                <div class="card shadow kartu bg-primary text-light">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="text-end pt-1">
                                    <h3 class="text-sm mb-0 text-capitalize">Arsip Masuk</h3>
                                    <p class="text-sm mb-0 text-capitalize">{{ $total_masuk }} Surat</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-2" style="justify-content: space-around">
                            <div class="col-md-10">Read More</div>
                            <div class="col-md-2"> <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mt-5">
                <a href="/dashboard/keluar" class="text-primary">
                    <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                        <div class="row justify-content-between">
                            <div class="col-md-3 colom-kartu">
                                <div class="card shadow kartu bg-primary text-light">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="text-end pt-1">
                                    <h3 class="text-sm mb-0 text-capitalize">Arsip Keluar</h3>
                                    <p class="text-sm mb-0 text-capitalize">{{ $total_keluar }} Surat</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-2 justify-content-between">
                            <div class="col-md-10">Read More</div>
                            <div class="col-md-2"> <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mt-5">
                <a href="/dashboard/semua" class="text-primary">
                    <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                        <div class="row justify-content-between">
                            <div class="col-md-3 colom-kartu">
                                <div class="card shadow kartu bg-primary text-light">
                                    <i class="fas fa-envelopes-bulk"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="text-end pt-1">
                                    <h3 class="text-sm mb-0 text-capitalize">Semua Arsip</h3>
                                    <p class="text-sm mb-0 text-capitalize">{{ $total_semua }} Surat</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-2" style="justify-content: space-around">
                            <div class="col-md-10">Read More</div>
                            <div class="col-md-2"> <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mt-5">
                <a href="/datapengguna" class="text-primary">
                    <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                        <div class="row justify-content-between">
                            <div class="col-md-3 colom-kartu">
                                <div class="card shadow kartu bg-primary text-light">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="text-end pt-1">
                                    <h3 class="text-sm mb-0 text-capitalize">Petugas</h3>
                                    <p class="text-sm mb-0 text-capitalize">{{ $total_petugas }} Orang</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-2 justify-content-between">
                            <div class="col-md-10">Read More</div>
                            <div class="col-md-2"> <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @elseif (Auth::user()->is_admin == '0')
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5">
                <a href="/dashboard/masuk" class="text-primary">
                    <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                        <div class="row justify-content-between">
                            <div class="col-md-3 colom-kartu-1">
                                <div class="card shadow kartu bg-primary text-light">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="text-end pt-1">
                                    <h3 class="text-sm mb-0 text-capitalize">Arsip Masuk</h3>
                                    <p class="text-sm mb-0 text-capitalize">{{ $total_masuk }} Surat</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-2" style="justify-content: space-around">
                            <div class="col-md-10">Read More</div>
                            <div class="col-md-2"> <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mt-5">
                <a href="/dashboard/keluar" class="text-primary">
                    <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                        <div class="row justify-content-between">
                            <div class="col-md-3 colom-kartu-1">
                                <div class="card shadow kartu bg-primary text-light">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="text-end pt-1">
                                    <h3 class="text-sm mb-0 text-capitalize">Arsip Keluar</h3>
                                    <p class="text-sm mb-0 text-capitalize">{{ $total_keluar }} Surat</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-2 justify-content-between">
                            <div class="col-md-10">Read More</div>
                            <div class="col-md-2"> <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mt-5">
                <a href="/userprofile" class="text-primary">
                    <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                        <div class="row justify-content-between">
                            <div class="col-md-3 colom-kartu-1">
                                <div class="card shadow kartu bg-primary text-light">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="text-end pt-1">
                                    <h3 class="text-sm mb-0 text-capitalize">Profile</h3>
                                    <p class="text-sm mb-0 text-capitalize">{{ auth()->user()->name }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-cols-2 justify-content-between">
                            <div class="col-md-10">Read More</div>
                            <div class="col-md-2"> <i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    @endif

    @include('sweetalert::alert')
@endsection

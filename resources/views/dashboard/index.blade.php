@extends('dashboard.layouts.index')

@section('content')

<div class="row">

    @if (Auth::user()->is_admin == '1')

    <div class="col-lg-3">
        <a href="/dashboard/masuk" class="text-decoration-none">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $total_masuk }}</h3>
                    <p>Surat Masuk</p>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3">
        <a href="/dashboard/keluar" class="text-decoration-none">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $total_keluar }}</h3>
                    <p>Surat Keluar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-paper-plane"></i>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 text-light">
        <a href="/dashboard/semua" class="text-decoration-none">
            <div class="small-box bg-warning">
                <div class="inner text-white">
                    <h3>{{ $total_semua }}</h3>
                    <p>All Arsip</p>
                </div>
                <div class="icon">
                    <i class="fas fa-archive"></i>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3">
        <a href="/datapengguna" class="text-decoration-none">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $total_petugas }}</h3>
                    <p>Data Petugas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </a>
    </div>
    @endif


    @if (Auth::user()->is_admin == '0')
    <div class="col-lg-6">
        <a href="/dashboard/masuk" class="text-decoration-none">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $total_masuk }}</h3>
                    <p>Surat Masuk</p>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-6">
        <a href="/dashboard/keluar" class="text-decoration-none">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $total_keluar }}</h3>
                    <p>Surat Keluar</p>
                </div>
                <div class="icon">
                    <i class="fas fa-paper-plane"></i>
                </div>
            </div>
        </a>
    </div>
    @endif

</div>

@endsection

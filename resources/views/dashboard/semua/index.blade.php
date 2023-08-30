@extends('dashboard.layouts.index')

@section('content')
<div class="row">
    <div class="col-lg-6 col-6">
        <a href="/dashboard/semua/masuk" class="text-decoration-none">
            <div class="small-box bg-info">
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

    <div class="col-lg-6 col-6">
        <a href="/dashboard/semua/keluar" class="text-decoration-none">
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
</div>
@endsection
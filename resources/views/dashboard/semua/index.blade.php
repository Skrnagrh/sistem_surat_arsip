@extends('layouts.dashboard')

@section('content')
<style>
    .colom-kartu {
        margin-top: -5%;
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

<h1 class="mt-3 text-capitalize">Semua Arsip</h1>
<hr>
<div class="row">
    <div class="col-md-6 mt-3">
        <a href="/dashboard/semua/masuk" class="text-primary">
            <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                <div class="row justify-content-between">
                    <div class="col-md-3 colom-kartu">
                        <div class="card shadow kartu bg-primary text-light">
                            <i class="fas fa-envelopes-bulk"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="text-end pt-1">
                            <h3 class="text-sm mb-0 text-capitalize">Semua Arsip Masuk</h3>
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
    <div class="col-md-6 mt-3">
        <a href="/dashboard/semua/keluar" class="text-primary">
            <div class="shadow p-3 bg-body-tertiary rounded" style="height: 100%">
                <div class="row justify-content-between">
                    <div class="col-md-3 colom-kartu">
                        <div class="card shadow kartu bg-primary text-light">
                            <i class="fas fa-envelopes-bulk"></i>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="text-end pt-1">
                            <h3 class="text-sm mb-0 text-capitalize">Semua Arsip Keluar</h3>
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

</div>
@endsection
<style>
    .feature-card {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        margin-top: 10px;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .feature-icon {
        font-size: 24px;
        margin-bottom: 10px;
    }
</style>

@extends('home.layouts.index')

@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Sistem Surat Arsip</h1>
                <h1>PT. Indah Persada Tech</h1>
                <h2>Jl. 45 Serang Banten Indonesia</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    @auth
                    <a href="/dashboard" class="btn-get-started scrollto">Dashboard</a>
                    @else
                    <a href="/login" class="btn-get-started scrollto">Login</a>
                    @endauth
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="/home/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title" data-aos="fade-up">
                    <h2>Manfaat Sistem Surat Arsip</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-check-circle"></i>
                    </div>
                    <h3>Pengarsipan yang Terorganisir</h3>
                    <p>Surat-surat akan diarsipkan secara terstruktur, sehingga mudah ditemukan dan diakses kapan saja
                        Anda butuhkan.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-clock"></i>
                    </div>
                    <h3>Efisiensi Proses</h3>
                    <p>Sistem kami memungkinkan Anda untuk dengan cepat mengelompokkan, mencari, dan memantau status
                        surat, menghemat waktu dan tenaga.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-shield"></i>
                    </div>
                    <h3>Keamanan Data</h3>
                    <p>Keamanan data Anda adalah prioritas kami. Kami menggunakan langkah-langkah keamanan yang kuat
                        untuk melindungi informasi penting Anda.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-file-earmark-bar-graph"></i>
                    </div>
                    <h3>Laporan dan Analisis</h3>
                    <p>Dapatkan informasi berharga melalui laporan dan analisis yang dapat membantu Anda membuat
                        keputusan yang lebih baik.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
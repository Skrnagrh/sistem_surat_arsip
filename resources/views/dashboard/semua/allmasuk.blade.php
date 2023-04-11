@extends('layouts.dashboard')

@section('content')

<h1 class="mt-3 text-capitalize">All Arsip Masuk</h1>
<hr>
    <div class="shadow bg-body rounded mb-5">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Arsip Surat Masuk
        </div>
        <div class="card-body">
            <a href="/all/print/masuk" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                data-bs-toggle="modal" data-bs-target="#printin"><i class="fas fa-print fa-sm"></i>
                <strong>Print Report</strong></a>
            @include('dashboard.semua.printin')

            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th><strong>No</strong></th>
                        <th><strong>Nama Petugas</strong></th>
                        <th><strong>Kode Arsip</strong></th>
                        <th><strong>Nomor Surat</strong></th>
                        <th><strong>Pengirim</strong></th>
                        <th><strong>Tanggal Surat</strong></th>
                        <th><strong>Perihal Surat</strong></th>
                        <th><strong>Alamat Surat</strong></th>
                        <th><strong>Action</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masuk1 as $masuk)
                        <tr>
                            <td class="text-center"><strong>{{ $loop->iteration }}</strong></td>
                            <td>{{ $masuk->nama }}</td>
                            <td>{{ $masuk->kodesm }}</td>
                            <td>{{ $masuk->nomor }}</td>
                            <td>{{ $masuk->pengirim }}</td>
                            <td>{{ $masuk->tanggal }}</td>
                            <td>{{ $masuk->prihal }}</td>
                            <td>{{ $masuk->alamat }}</td>
                            <td>
                                <a href="/print/satu/masuk/{{ $masuk->id }}" class="btn btn-success btn-sm m-1"
                                    data-bs-toggle="modal" data-bs-target="#masukshow{{ $masuk->id }}"><i
                                        class="bi bi-eye"></i>
                                </a>
                                @include('dashboard.semua.show')

                                {{-- <a href="/admin/surat/masuk/{{ $masuk->id }}/edit" target="_blank" class="btn btn-outline-secondary btn-sm m-1"><i class="bi bi-printer-fill"></i>
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <script type="text/javascript" src="/dashboard/js/datetime.js"></script>
    <script type="text/javascript">
        window.onload = date_time('date_time');
    </script>


@endsection
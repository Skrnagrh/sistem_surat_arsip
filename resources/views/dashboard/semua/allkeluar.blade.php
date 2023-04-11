@extends('layouts.dashboard')

@section('content')
    <h1 class="mt-3 text-capitalize">All Arsip Keluar</h1>
    <hr>
    <div class="shadow bg-body rounded mb-5">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Arsip Surat Keluar
        </div>
        <div class="card-body">

            <a href="/all/print/keluar" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                data-bs-toggle="modal" data-bs-target="#printout"><i class="fas fa-print fa-sm"></i>
                <strong>Print Report</strong></a>
            @include('dashboard.semua.printout')

            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th><strong>No</strong></th>
                        <th><strong>Nama Petugas</strong></th>
                        <th><strong>Kode Arsip</strong></th>
                        <th><strong>Nomor Surat</strong></th>
                        <th><strong>Tujuan</strong></th>
                        <th><strong>Tanggal Surat</strong></th>
                        <th><strong>Perihal Surat</strong></th>
                        <th><strong>Action</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluar1 as $keluar)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td>{{ $keluar->nama }}</td>
                            <td>{{ $keluar->kodesk }}</td>
                            <td>{{ $keluar->nomor }}</td>
                            <td>{{ $keluar->tujuan }}</td>
                            <td>{{ $keluar->tanggal }}</td>
                            <td>{{ $keluar->prihal }}</td>
                            <td>
                                <a href="/print/satu/keluar/{{ $keluar->id }}" class="btn btn-success btn-sm m-1"
                                    data-bs-toggle="modal" data-bs-target="#keluarshow{{ $keluar->id }}"><i
                                        class="bi bi-eye"></i>
                                </a>
                                @include('dashboard.semua.showout')
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

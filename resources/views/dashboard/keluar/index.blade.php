@extends('layouts.dashboard')

@section('content')
<h1 class="mt-3 text-capitalize">Arsip Surat Keluar</h1>
<hr>
    <div class="shadow bg-body rounded mb-5">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Arsip Surat Keluar
        </div>
        <div class="card-body">

            <a type="create" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createsuratkeluar"
                data-bs-whatever="@mdo"><i class="bi bi-bookmark-plus"></i> <strong>Buat Baru</strong></a>
            <a href="/surat/keluar/print" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                data-bs-toggle="modal" data-bs-target="#printall"><i class="fas fa-print fa-sm"></i>
                <strong>Print Report</strong></a>
            @include('dashboard.keluar.create')
            @include('dashboard.keluar.printall')


            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th><strong>No</strong></th>
                        <th><strong>Kode Arsip</strong></th>
                        <th><strong>Nomor Surat</strong></th>
                        <th><strong>Tujuan</strong></th>
                        <th><strong>Tanggal Surat</strong></th>
                        <th><strong>Perihal Surat</strong></th>
                        <th><strong>Keterangan</strong></th>
                        <th><strong>Action</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluar1 as $keluar)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td>{{ $keluar->kodesk }}</td>
                            <td>{{ $keluar->nomor }}</td>
                            <td>{{ $keluar->tujuan }}</td>
                            <td>{{ $keluar->tanggal }}</td>
                            <td>{{ $keluar->prihal }}</td>
                            <td>{{ $keluar->keterangan }}</td>
                            <td>
                                <a href="/dashboard/keluar/{{ $keluar->id }}"
                                    class="btn btn-success btn-sm m-1"data-bs-toggle="modal"
                                    data-bs-target="#keluar{{ $keluar->id }}"><i class="bi bi-eye"></i>
                                </a>

                                <a href="/dashboard/keluar/{{ $keluar->id }}/edit" class="btn btn-warning btn-sm m-1"
                                    data-bs-toggle="modal" data-bs-target="#keluaredit{{ $keluar->id }}"><i
                                        class="bi bi-pen text-light"></i>
                                </a>

                                <a href="/dashboard/keluar/{{ $keluar->id }}" class="btn btn-sm btn-secondary"
                                    data-bs-toggle="modal" data-bs-target="#printkeluar{{ $keluar->id }}">
                                    <i class="bi bi-printer text-light"></i>
                                </a>

                                <form action="/dashboard/keluar/{{ $keluar->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm m-1" onclick="return confirm('Are you sure?')"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                                @include('dashboard.keluar.show')
                                @include('dashboard.keluar.edit')
                                @include('dashboard.keluar.print')

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

    @include('sweetalert::alert')
@endsection

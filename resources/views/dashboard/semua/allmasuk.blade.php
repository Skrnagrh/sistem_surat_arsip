@extends('dashboard.layouts.index')

@section('content')

<a href="/dashboard/semua" class="btn btn-danger btn-sm"><i class="fas fa-arrow-left fa-sm"></i> Kembali</a>
<a href="/all/print/masuk" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
    data-bs-toggle="modal" data-bs-target="#printin"><i class="fas fa-print fa-sm"></i>
    Print Report</a>
@include('dashboard.semua.printin')

<div class="card shadow bg-body rounded mt-3">
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Kode Arsip</th>
                        <th>Nomor Surat</th>
                        <th>Pengirim</th>
                        <th>Tanggal Surat</th>
                        <th>Perihal Surat</th>
                        <th>Alamat Surat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masuk1 as $masuk)
                    <tr>
                        <td class="text-center font-weight-bold">{{ $loop->iteration }}</td>
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

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

<script type="text/javascript" src="/dashboard/js/datetime.js"></script>
<script type="text/javascript">
    window.onload = date_time('date_time');
</script>
@endsection

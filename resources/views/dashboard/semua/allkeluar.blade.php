@extends('dashboard.layouts.index')

@section('content')

<a href="/dashboard/semua" class="btn btn-danger btn-sm"><i class="fas fa-arrow-left fa-sm"></i> Kembali</a>
<a href="/all/print/keluar" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
    data-bs-toggle="modal" data-bs-target="#printout"><i class="fas fa-print fa-sm"></i>
    Print Report</a>
@include('dashboard.semua.printout')

<div class="shadow card rounded mt-3">
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Kode Arsip</th>
                        <th>Nomor Surat</th>
                        <th>Tujuan</th>
                        <th>Tanggal Surat</th>
                        <th>Perihal Surat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluar1 as $keluar)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
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
</div>

<script type="text/javascript" src="/dashboard/js/datetime.js"></script>
<script type="text/javascript">
    window.onload = date_time('date_time');
</script>
@endsection

@extends('dashboard.layouts.index')

@section('content')

<a type="create" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createsuratkeluar"
    data-bs-whatever="@mdo"><i class="bi bi-bookmark-plus"></i> Buat Baru</a>
<a href="/surat/keluar/print" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
    data-bs-toggle="modal" data-bs-target="#printall"><i class="fas fa-print fa-sm"></i>
    Print Report</a>
@include('dashboard.keluar.create')
@include('dashboard.keluar.printall')

<div class="card mt-3">
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatable" class="table table-bordered table-striped border-dark">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Kode Arsip</th>
                        <th>Nomor Surat</th>
                        <th>Tujuan</th>
                        <th>Tanggal Surat</th>
                        <th>Perihal</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluar1 as $keluar)

                    @php
                    $tujuan = implode(' ', array_slice(str_word_count($keluar->tujuan, 1), 0, 5));
                    $prihal = implode(' ', array_slice(str_word_count($keluar->prihal, 1), 0, 5));
                    $keterangan = implode(' ', array_slice(str_word_count($keluar->keterangan, 1), 0, 5));
                    @endphp

                    @php
                    \Carbon\Carbon::setLocale('id');
                    @endphp

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $keluar->kodesk }}</td>
                        <td>{{ $keluar->nomor }}</td>
                        <td>{{ $tujuan }}</td>
                        <td>{{ \Carbon\Carbon::parse($keluar->tanggal)->format('d F Y') }}</td>
                        <td>{{ $prihal }}</td>
                        <td>{{ $keterangan }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Surat Keluar Actions">
                                <a href="/dashboard/keluar/{{ $keluar->id }}" class="btn btn-success btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#keluar{{ $keluar->id }}"><i
                                        class="fa fa-eye"></i>
                                </a>

                                <a href="/dashboard/keluar/{{ $keluar->id }}/edit" class="btn btn-warning btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#keluaredit{{ $keluar->id }}"><i
                                        class="fa fa-pen text-light"></i>
                                </a>

                                <a href="/dashboard/keluar/{{ $keluar->id }}" class="btn btn-sm btn-secondary"
                                    data-bs-toggle="modal" data-bs-target="#printkeluar{{ $keluar->id }}">
                                    <i class="fa fa-print text-light"></i>
                                </a>

                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#DeleteModal{{ $keluar->id }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>

                            <div class="modal fade" id="DeleteModal{{ $keluar->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-capitalize">
                                            Apakah Anda Yakin Ingin Menghapus surat keluar {{ $keluar->tujuan }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <form action="/dashboard/keluar/{{ $keluar->id }}" method="post"
                                                class="d-inline" id="delete-mail">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Ya, Hapus!</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
</div>
@include('sweetalert::alert')
@endsection
@extends('dashboard.layouts.index')

@section('content')


<a type="create" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#mocreat"
    data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Buat Baru</a>
<a type="create" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#printall"
    data-bs-whatever="@mdo"><i class="fa fa-print"></i> Print All</a>
@include('dashboard.masuk.create')
@include('dashboard.masuk.printall')

<div class="card mt-3 shadow rounded">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped border-dark" id="datatable">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Kode Arsip</th>
                        <th>Nomor Surat</th>
                        <th>Pengirim</th>
                        <th>Tanggal Surat</th>
                        <th>Perihal</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masuk1 as $masuk)

                    @php
                    $pengirim = implode(' ', array_slice(str_word_count($masuk->pengirim, 1), 0, 5));
                    $prihal = implode(' ', array_slice(str_word_count($masuk->prihal, 1), 0, 5));
                    $alamat = implode(' ', array_slice(str_word_count($masuk->alamat, 1), 0, 5));
                    @endphp

                    @php
                    \Carbon\Carbon::setLocale('id');
                    @endphp

                    <tr>
                        <td class="text-center font-weight-bold">{{ $loop->iteration }}</td>
                        <td>{{ $masuk->kodesm }}</td>
                        <td>{{ $masuk->nomor }}</td>
                        <td>{{ $pengirim }}</td>
                        <td>{{ \Carbon\Carbon::parse($masuk->tanggal)->format('d F Y') }}</td>
                        <td>{{ $prihal }}</td>
                        <td>{{ $alamat }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Surat Masuk Actions">
                                <a href="/dashboard/masuk/{{ $masuk->id }}" class="btn btn-success btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#masukshow{{ $masuk->id }}">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <a href="/dashboard/masuk/{{ $masuk->id }}/edit" class="btn btn-warning btn-sm"
                                    data-bs-toggle="modal" data-bs-target="#masukedit{{ $masuk->id }}">
                                    <i class="fa fa-pen text-light"></i>
                                </a>

                                <a href="/dashboard/masuk/{{ $masuk->id }}" class="btn btn-sm btn-info"
                                    data-bs-toggle="modal" data-bs-target="#printmasuk{{ $masuk->id }}">
                                    <i class="fa fa-print text-light"></i>
                                </a>

                                {{-- <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#DeleteModal{{ $masuk->id }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </div>

                            <div class="modal fade" id="DeleteModal{{ $masuk->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                            </div> --}}

                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#DeleteModal{{ $masuk->id }}">
                                <i class="fa fa-trash"></i>
                            </button>


                            <div class="modal fade" id="DeleteModal{{ $masuk->id }}" tabindex="-1"
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
                                            Apakah Anda Yakin Ingin Menghapus surat masuk {{ $masuk->pengirim }}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <form action="/dashboard/masuk/{{ $masuk->id }}" method="post"
                                                class="d-inline" id="delete-mail">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Ya, Hapus!</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @include('dashboard.masuk.show')
                            @include('dashboard.masuk.edit')
                            @include('dashboard.masuk.print')
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection
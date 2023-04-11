@extends('layouts.dashboard')

@section('content')
<h1 class="mt-3 text-capitalize">Arsip Surat Masuk</h1>
<hr>
    <div class="shadow bg-body rounded mb-5">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Arsip Surat Masuk
        </div>
        <div class="card-body">
            <a type="create" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#mocreat"
                data-bs-whatever="@mdo"><i class="bi bi-bookmark-plus"></i> <strong>Buat Baru</strong></a>
            <a href="/surat/masuk/print" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"
                data-bs-toggle="modal" data-bs-target="#printall"><i class="fas fa-print fa-sm"></i>
                <strong>Print Report</strong></a>
            @include('dashboard.masuk.create')
            @include('dashboard.masuk.printall')

            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th><strong>No</strong></th>
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
                            <td>{{ $masuk->kodesm }}</td>
                            <td>{{ $masuk->nomor }}</td>
                            <td>{{ $masuk->pengirim }}</td>
                            <td>{{ $masuk->tanggal }}</td>
                            <td>{{ $masuk->prihal }}</td>
                            <td>{{ $masuk->alamat }}</td>
                            <td>
                                <a href="/dashboard/masuk/{{ $masuk->id }}" class="btn btn-success btn-sm m-1"
                                    data-bs-toggle="modal" data-bs-target="#masukshow{{ $masuk->id }}"><i
                                        class="bi bi-eye"></i>
                                </a>

                                <a href="/dashboard/masuk/{{ $masuk->id }}/edit" class="btn btn-warning btn-sm m-1"
                                    data-bs-toggle="modal" data-bs-target="#masukedit{{ $masuk->id }}"><i
                                        class="bi bi-pen text-light"></i>
                                </a>

                                {{-- <a href="/dashboard/masuk/{{ $masuk->id }}" class="btn btn-sm btn-secondary"
                                    data-bs-toggle="modal" data-bs-target="#printmasuk{{ $masuk->id }}">
                                    <i class="bi bi-printer text-light"></i>
                                </a> --}}
                                <a href="/dashboard/masuk/{{ $masuk->id }}" class="btn btn-sm btn-secondary"
                                    data-bs-toggle="modal" data-bs-target="#printmasuk{{ $masuk->id }}">
                                    <i class="bi bi-printer text-light"></i>
                                </a>

                               

                                <form action="/dashboard/masuk/{{ $masuk->id }}" method="post" class="d-inline"
                                    id="delete-mail">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm m-1 btnDelete"
                                        onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                                </form>

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

    <script type="text/javascript" src="/dashboard/js/datetime.js"></script>
    <script type="text/javascript">
        window.onload = date_time('date_time');
    </script>

    @include('sweetalert::alert')
@endsection

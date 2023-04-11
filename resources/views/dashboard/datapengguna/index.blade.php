@extends('layouts.dashboard')

@section('content')
    <h1 class="mt-3 text-capitalize">Data Pengguna</h1>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Pengguna
                </div>
                <div class="card-body">
                    <a class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#mocreat"
                        data-bs-whatever="@mdo"><i class="fas fa-edit text-light"></i> Tambah Data</a>
                    @include('dashboard.datapengguna.create')

                    <div class="horizontal-scroll">
                        <table id="datatablesSimple" class="my-table">
                            <thead>
                                <tr style="text-transform: capitalize">
                                    <th>No</th>
                                    <th>Id Karyawan</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user1 as $user)
                                    <tr style="text-transform: capitalize">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->induk }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->jabatan_id }}</td>
                                        <td>
                                            <a href="/datapengguna/{{ $user->id }}/edit" class="btn btn-sm btn-warning"
                                                data-bs-toggle="modal" data-bs-target="#penggunaedit{{ $user->id }}"><i
                                                    class="fas fa-edit text-light"></i>
                                            </a>
                                            @include('dashboard.datapengguna.edit')


                                            <form action="/datapengguna/{{ $user->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm btn-danger border-0"
                                                    onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')

    <style>
        input[type='file'] {
            color: rgba(0, 0, 0, 0)
        }
    </style>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection

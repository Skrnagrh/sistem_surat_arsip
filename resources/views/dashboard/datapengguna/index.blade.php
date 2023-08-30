@extends('dashboard.layouts.index')

@section('content')
<a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#mocreat" data-bs-whatever="@mdo"><i
        class="fas fa-edit text-light"></i> Tambah Data</a>
@include('dashboard.datapengguna.create')

<div class="card mt-3">
    <div class="card-body">
    <div class="table-responsive">
        <table id="datatable" class="table table-bordered table-striped border-dark">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Id Karyawan</th>
                    <th>Nama Lengkap</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user1 as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->induk }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Surat user Actions">

                            <a href="/datapengguna/{{ $user->id }}/edit" class="btn btn-warning btn-sm"
                                data-bs-toggle="modal" data-bs-target="#penggunaedit{{ $user->id }}"><i
                                    class="fa fa-pen text-light"></i>
                            </a>

                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#DeleteModal{{ $user->id }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>

                        <div class="modal fade" id="DeleteModal{{ $user->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-capitalize">
                                        Apakah Anda Yakin Ingin Menghapus surat user {{ $user->name }}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <form action="/datapengguna/{{ $user->id }}" method="post" class="d-inline"
                                            id="delete-mail">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Ya, Hapus!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('dashboard.datapengguna.edit')
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
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

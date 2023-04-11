{{-- @extends('dashboard.partials.main')

@section('content')
    <div id="layoutSidenav" class="m-3">
        <div id="layoutSidenav_content">

            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="card shadow">

                        <div class="card-header p-0">
                            <a href="#editdatapetugas" class="d-block card-header" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="editdatapetugas">
                                <h2 class="m-0 font-weight-bold text-dark"><strong>E</strong>dit <strong>D</strong>ata
                                    <strong>P</strong>etugas
                                </h2>
                            </a>
                        </div>

                        <form method="post" action="{{ route('datapengguna.update', $user->id) }}" class="mb-3 p-3"
                            id="editdatapetugas" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <div class="mb-3">
                                <label for="induk" class="form-label">induk<span style="color: red">*</span></label>
                                <input type="number" class="form-control" id="induk" name="induk" required autofocus
                                    value="{{ old('induk', $user->induk) }}">
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">name<span style="color: red">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    value="{{ old('name', $user->name) }}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="jabatan_id" class="label text-dark">Jabatan<span
                                        style="color: red">*</span></label></label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="jabatan">
                                        @foreach ($jabatans as $jabatan)
                                            @if (old('jabatan_id', $user->jabatan_id) == $jabatan->id)
                                                <option value="{{ $jabatan->id }}" selected>{{ $jabatan->name }}</option>
                                            @else
                                                <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            @if ($user->image)
                                <img src="{{ asset('storage/images/' . $user->image) }}"
                                    class="img-preview img-thumbnail rounded d-block mb-3" style="height: 210px">
                            @else
                                <img class="img-preview img-thumbnail rounded d-block mb-3" src="/default.png"
                                    style="height: 210px">
                            @endif
                            <input type='file' id="image" type="file" name="image" onchange="previewImage()" class="mb-3"/>

                            <div class="modal-footer">
                                <a href="/datapengguna" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-arrow-left"></i> <strong>Back</strong>
                                </a>
                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="bi bi-send"></i>
                                    Save</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
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
@endsection --}}

<div class="modal fade" id="penggunaedit{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"><strong>E</strong>dit <strong>D</strong>ata
                    <strong>P</strong>etugas
                </h1>
            </div>
            <form method="post" action="{{ route('datapengguna.update', $user->id) }}" class="mb-3 p-3"
                id="editdatapetugas" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="induk" class="form-label">induk<span style="color: red">*</span></label>
                        <input type="number" class="form-control" id="induk" name="induk" required autofocus
                            value="{{ old('induk', $user->induk) }}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required
                            value="{{ old('name', $user->name) }}">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="jabatan_id" class="label text-dark">Jabatan<span
                                style="color: red">*</span></label></label>
                        <div class="col-sm-12">
                            <select class="form-select" name="jabatan">
                                @foreach ($jabatans as $jabatan)
                                    @if (old('jabatan_id', $user->jabatan_id) == $jabatan->name)
                                        <option value="{{ $jabatan->name }}" selected>{{ $jabatan->name }}</option>
                                    @else
                                        <option value="{{ $jabatan->name }}">{{ $jabatan->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    @if ($user->image)
                        <img src="{{ asset('storage/images/' . $user->image) }}"
                            class="img-preview img-thumbnail rounded d-block mb-3" style="height: 210px">
                    @else
                        <img class="img-preview img-thumbnail rounded d-block mb-3" src="/default.png"
                            style="height: 210px">
                    @endif
                    <input type='file' id="image" type="file" name="image" onchange="previewImage()"
                        class="mb-3" />



                </div>
                <div class="modal-footer">
                    <a href="/datapengguna" class="btn btn-sm btn-danger"><i class="fas fa-circle-xmark"></i> Batal</a>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-floppy-disk"></i>
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

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

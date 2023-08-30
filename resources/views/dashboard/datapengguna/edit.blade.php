<form method="post" action="{{ route('datapengguna.update', $user->id) }}" id="editdatapetugas"
    enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="modal fade" id="penggunaedit{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Edit Data Petugas {{ $user->name }}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="induk" class="form-label">Nomor Induk Pegawai</label>
                        <input type="number" class="form-control" id="induk" name="induk" required autofocus
                            value="{{ old('induk', $user->induk) }}">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" required
                            value="{{ old('name', $user->name) }}">
                    </div>


                    @if ($user->image)
                    <img src="{{ asset('storage/images/' . $user->image) }}"
                        class="img-preview img-thumbnail rounded d-block mb-3" style="height: 210px">
                    @else
                    <img class="img-preview img-thumbnail rounded d-block mb-3" src="/default.png"
                        style="height: 210px">
                    @endif
                    <input type='file' id="image" type="file" name="image" onchange="previewImage()" class="mb-3" />



                </div>
                <div class="modal-footer">
                    <a data-bs-dismiss="modal" class="btn btn-danger"><i class="fas fa-circle-xmark"></i> Batal</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-floppy-disk"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

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

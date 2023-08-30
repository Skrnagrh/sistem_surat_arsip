<form method="post" action="/datapengguna" enctype="multipart/form-data" id="createsuratmasuk">
    @csrf
    <div class="modal fade" id="mocreat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Petugas</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="induk" class="form-label text-dark">Nomor Induk Karyawan</label>
                        <input type="text" class="form-control @error('induk') is-invalid @enderror" id="induk"
                            name="induk" value="{{ $kode }}" placeholder="Nomor Induk Karyawan" min="1" maxlength="10">
                        @error('induk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label text-dark">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required autofocus
                            value="{{ old('name') }}" placeholder="Full Name">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-dark">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" required autofocus value="{{ old('password') }}"
                            placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <img class="img-preview img-thumbnail rounded d-block mb-3" src="/default.png"
                            style="height: 210px">
                        <input type='file' id="image" type="file" name="image" onchange="previewImage()" />
                    </div>

                </div>
                <div class="modal-footer">
                    <a data-bs-dismiss="modal" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
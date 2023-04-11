<div class="modal fade" id="mocreat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-dark" id="exampleModalLabel"><strong>R</strong>egister <strong>A</strong>dmin
                    <strong>B</strong>aru
                </h3>
                <i class="bi bi-x-lg text-danger" data-bs-dismiss="modal" aria-label="Close"></i>
            </div>
            <form method="post" action="/datapengguna" class="mb-3" enctype="multipart/form-data"
                id="createsuratmasuk">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="induk" class="form-label text-dark">Nomor Induk Karyawan<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control @error('induk') is-invalid @enderror" id="induk"
                            name="induk" value="{{ $kode }}" placeholder="Nomor Induk Karyawan" min="1"
                            maxlength="10">
                        @error('induk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="col-md-12">
                        <input type="text" class="form-control @error('induk') is-invalid @enderror"
                            id="induk" name="induk" placeholder="induk" required
                            value="{{ $indukvalue + 10000 }}">
                        @error('induk')
                            <div class="invalid-feedback">
                                {{ 'Jika Nomor induk salah angka terakhir ditambah 1' }}
                            </div>
                        @enderror
                    </div> --}}

                    <div class="mb-3">
                        <label for="name" class="form-label text-dark">Full Name<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required autofocus
                            value="{{ old('name') }}" placeholder="Full Name">
                    </div>

                    {{-- <div class="mb-3">
                        <label for="password" class="form-label text-dark">Jabatan<span
                                style="color: red">*</span></label></label>
                        <div class="col-sm-12">
                            <select class="form-select" name="jabatan_id">
                                @foreach ($jabatans as $jabatan)
                                    @if (old('jabatan_id') == $jabatan->name)
                                        <option value="{{ $jabatan->name }}" selected>{{ $jabatan->name }}</option>
                                    @else
                                        <option value="{{ $jabatan->name }}">{{ $jabatan->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="mb-3">
                        <label for="password" class="form-label text-dark">Password<span
                                style="color: red">*</span></label>
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
                        <input type='file' id="image" type="file" name="image" onchange="previewImage()"
                            class="mb-3" />
                    </div>

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

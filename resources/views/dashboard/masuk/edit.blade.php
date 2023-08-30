<form method="post" action="/dashboard/masuk/{{ $masuk->id }}" class="text-dark" id="editsuratmasuk"
    enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="modal fade" id="masukedit{{ $masuk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5 text-capitalize" id="exampleModalLabel">Edit Surat Masuk {{ $masuk->kodesm }}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <input type="hidden" class="form-control" id="nama" name="nama"
                        value="{{ old('nama', $masuk->nama) }}">

                    <div class="mb-3">
                        <label for="kodesm" class="form-label text-dark">Kode Surat Arsip</label>
                        <input type="text" class="form-control" id="kodesm" name="kodesm"
                            value="{{ old('kodesm', $masuk->kodesm) }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor Surat</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required autofocus
                            value="{{ old('nomor', $masuk->nomor) }}">
                        @error('nomor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pengirim" class="form-label">Pengirim Surat</label>
                        <input type="text" class="form-control" id="pengirim" name="pengirim" required
                            value="{{ old('pengirim', $masuk->pengirim) }}">
                        @error('pengirim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Surat</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required autofocus
                            value="{{ old('tanggal', $masuk->tanggal) }}">
                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="prihal" class="form-label">Prihal Surat</label>
                        <input type="text" class="form-control" id="prihal" name="prihal" required autofocus
                            value="{{ old('prihal', $masuk->prihal) }}">
                        @error('prihal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="lamp" class="form-label">Lampiran Surat</label>
                        <input type="text" class="form-control" id="lamp" name="lamp" required autofocus
                            value="{{ old('lamp', $masuk->lamp) }}">
                        @error('lamp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Surat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required autofocus
                            value="{{ old('alamat', $masuk->alamat) }}">
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan Surat</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required autofocus
                            value="{{ old('keterangan', $masuk->keterangan) }}">
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-0">
                        <label class="form-label " for="oldpdf">File Surat (Tipe file PDF dan Ukuran file
                            Max. 5MB)</label>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="@error('pdf') is-invalid @enderror" value="{{ $masuk->pdf }}"
                            name="pdf">
                        @error('pdf')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a data-bs-dismiss="modal" aria-label="Close" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</form>

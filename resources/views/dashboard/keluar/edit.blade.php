<form method="post" action="/dashboard/keluar/{{ $keluar->id }}" class="text-dark" id="editsuratkeluar"
    enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="modal fade" id="keluaredit{{ $keluar->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Edit Surat Keluar Tujuan {{ $keluar->kodesk }}</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <input type="hidden" class="form-control" id="nama" name="nama"
                        value="{{ old('nama', $keluar->nama) }}">

                    <div class="mb-3">
                        <label for="kodesk" class="form-label text-dark">Kode Surat Arsip</label>
                        <input type="text" class="form-control" id="kodesk" name="kodesk"
                            value="{{ old('kodesk', $keluar->kodesk) }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor Surat</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required autofocus
                            value="{{ old('nomor', $keluar->nomor) }}">
                        @error('nomor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan Surat</label>
                        <input type="text" class="form-control" id="tujuan" name="tujuan" required
                            value="{{ old('tujuan', $keluar->tujuan) }}">
                        @error('tujuan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Surat</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" required
                            value="{{ old('tanggal', $keluar->tanggal) }}">
                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="lamp" class="form-label">Lampiran Surat</label>
                        <input type="text" class="form-control" id="lamp" name="lamp" required
                            value="{{ old('lamp', $keluar->lamp) }}">
                        @error('lamp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="prihal" class="form-label">Perihal Surat</label>
                        <input type="text" class="form-control" id="prihal" name="prihal" required
                            value="{{ old('prihal', $keluar->prihal) }}">
                        @error('prihal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Surat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required
                            value="{{ old('alamat', $keluar->alamat) }}">
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan Surat</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" required
                            value="{{ old('keterangan', $keluar->keterangan) }}">
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-0">
                        <label class="form-label " for="pdf">File Surat (Tipe file PDF dan Ukuran file
                                Max. 5MB)</label>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="@error('pdf') is-invalid @enderror" value="{{ $keluar->pdf }}"
                            name="pdf">
                        @error('pdf')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <a data-bs-dismiss="modal" class="btn btn-danger mt-2">Batal </a>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </div>

            </div>
        </div>
    </div>
</form>

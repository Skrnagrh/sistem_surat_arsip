<form method="post" action="/dashboard/keluar" enctype="multipart/form-data" class="text-dark">
    @csrf
    <div class="modal fade" id="createsuratkeluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Tambah Surat Keluar</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body scrollable-near-moon">

                    <input type="hidden" class="form-control" id="nama" name="nama" value="{{ auth()->user()->name }}">

                    <div class="mb-3">
                        <label for="kodesk" class="form-label text-dark">Kode Surat Arsip</label>
                        <input type="text" class="form-control" id="kodesk" name="kodesk" value="{{ $kodesk }}"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <label for="nomor" class="col-form-label">Nomor Surat</label>
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor"
                            name="nomor" placeholder="Nomor" required autofocus value="{{ old('nomor') }}">
                        @error('nomor')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tujuan" class="col-form-label">Tujuan Surat</label>
                        <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan"
                            name="tujuan" required value="{{ old('tujuan') }}" placeholder="tujuan">
                        @error('tujuan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="col-form-label">Tanggal Surat</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                            name="tanggal" required value="{{ old('tanggal') }}" placeholder="Tanggal">
                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="lamp" class="col-form-label">Lampiran</label>
                        <input type="text" class="form-control class=" @error('lamp') is-invalid @enderror" id="lamp"
                            name="lamp" placeholder="Lampiran" required value="{{ old('lamp') }}">
                        @error('lamp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="prihal" class="col-form-label">Perihal Surat</label>
                        <input type="text" class="form-control @error('prihal') is-invalid @enderror" id="prihal"
                            name="prihal" required value="{{ old('prihal') }}" placeholder="Perihal">
                        @error('prihal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="col-form-label">Alamat Surat</label>
                        <input type="text" class="form-control @error('pdf') is-invalid @enderror" id="alamat"
                            name="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
                        @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="col-form-label">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                            id="keterangan" name="keterangan" required value="{{ old('keterangan') }}"
                            placeholder="Keterangan">
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label class="form-label " for="pdf">File Surat (Tipe file PDF dan
                            Ukuran file Max. 5MB)</label>
                    </div>
                    <div class="mb-3">
                        <input type="file" class="@error('pdf') is-invalid @enderror" id="pdf" name="pdf">
                        @error('pdf')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <a data-bs-dismiss="modal" class="btn btn-danger mt-2">Batal</a>
                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>


<div class="modal fade" id="editpassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Kata Sandi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/password" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Kata Sandi Lama<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="old_password" placeholder="Kata Sandi Lama" />
                    </div>
                    <div class="mb-3">
                        <label>Kata Sandi Baru<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="new_password" placeholder="Kata Sandi Baru" />
                    </div>
                    <div class="mb-3">
                        <label>Konfirmasi Kata Sandi Baru<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="new_password_confirmation"
                            placeholder="Konfirmasi Kata Sandi Baru" />
                    </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger btn-sm" href="/userprofile"><i class="fas fa-circle-xmark"></i> Batal</a>
                <button class="btn btn-primary btn-sm"><i class="fas fa-floppy-disk"></i> Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>

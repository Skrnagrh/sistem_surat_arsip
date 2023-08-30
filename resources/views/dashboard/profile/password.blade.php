<div class="modal fade" id="editpassword" tabindex="-1" aria-labelledby="editPasswordLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPasswordLabel">Ubah Password</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/password">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="old_password">Kata Sandi Lama</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="old_password" id="old_password"
                                placeholder="Kata Sandi Lama" />
                            <button class="btn btn-outline-secondary" type="button" id="toggle_old_password">
                                <i class="fas fa-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="new_password">Kata Sandi Baru</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="new_password" id="new_password"
                                placeholder="Kata Sandi Baru" />
                            <button class="btn btn-outline-secondary" type="button" id="toggle_new_password">
                                <i class="fas fa-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="new_password_confirmation">Konfirmasi Kata Sandi Baru</label>
                        <div class="input-group">
                            <input class="form-control" type="password" name="new_password_confirmation"
                                id="new_password_confirmation" placeholder="Konfirmasi Kata Sandi Baru" />
                            <button class="btn btn-outline-secondary" type="button"
                                id="toggle_new_password_confirmation">
                                <i class="fas fa-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    const togglePassword = (inputElement, buttonElement) => {
        const inputType = inputElement.getAttribute('type');
        inputElement.setAttribute('type', inputType === 'password' ? 'text' : 'password');
        const icon = inputType === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        buttonElement.innerHTML = `<i class="${icon}"></i>`;
    };

    document.getElementById('toggle_old_password').addEventListener('click', function () {
        const input = document.getElementById('old_password');
        const button = this;
        togglePassword(input, button);
    });

    document.getElementById('toggle_new_password').addEventListener('click', function () {
        const input = document.getElementById('new_password');
        const button = this;
        togglePassword(input, button);
    });

    document.getElementById('toggle_new_password_confirmation').addEventListener('click', function () {
        const input = document.getElementById('new_password_confirmation');
        const button = this;
        togglePassword(input, button);
    });
</script>

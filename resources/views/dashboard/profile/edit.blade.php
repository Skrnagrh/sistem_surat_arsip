<div class="modal fade" id="userprofileEdit" tabindex="-1" aria-labelledby="userprofileEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userprofileEditLabel">Edit Profile</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            @if ($user->image)
                            <img src="{{ asset('storage/images/' . $user->image) }}"
                                class="img-preview img-thumbnail rounded mx-auto d-block mb-3" style="height: 210px">
                            @else
                            <img class="img-preview img-thumbnail rounded mx-auto d-block mb-3" src="/default.png"
                                style="height: 210px">
                            @endif
                            <input type="file" id="image" name="image" onchange="previewImage()" />
                        </div>
                        <div class="col-md-7">
                            <div class="mb-3">
                                <label for="induk" class="col-form-label">Nomor Induk Karyawan</label>
                                <input id="induk" type="text" class="form-control" name="induk"
                                    value="{{ $user->induk }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="col-form-label">Nama Lengkap</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ $user->name }}" required autocomplete="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
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

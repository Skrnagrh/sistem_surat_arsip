<div class="modal fade" id="masukshow{{ $masuk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5 text-capitalize" id="exampleModalLabel">Detail Surat Masuk {{ $masuk->kodesm }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row my">

                    <div class="col-md-5">
                        <div class="card card-info">
                            <div class="card-body p-0">
                                <table class="table">
                                    <tbody class="text-capitalize">
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Kode Arsip</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->kodesm }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Nomor Surat</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->nomor }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Pengirim</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->pengirim }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Tanggal</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->tanggal }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Lampiran</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->lamp }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Perihal Surat</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->prihal }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Alamat Surat</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->alamat }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Keterangan Surat</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->keterangan }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Waktu upload</b>
                                            </td>
                                            <td>:
                                                {{ $masuk->created_at }} </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        @if ($masuk->pdf)
                        <embed type="application/pdf" src="{{ asset('storage/' . $masuk->pdf) }}" width="100%"
                            height="100%" class="p-1" style="border-radius: 10px"></embed>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a data-bs-dismiss="modal" aria-label="Close" class="btn btn-danger">Kembali
                </a>
            </div>
        </div>
    </div>
</div>

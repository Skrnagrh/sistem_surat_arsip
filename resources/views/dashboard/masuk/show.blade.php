<div class="modal fade" id="masukshow{{ $masuk->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row my">

                    <div class="col-md-5">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Detail Surat Masuk</h3>
                            </div>
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
                <a href="/dashboard/masuk" class="btn btn-sm btn-danger">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>

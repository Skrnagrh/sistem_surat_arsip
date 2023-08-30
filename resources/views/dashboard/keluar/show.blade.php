<div class="modal fade" id="keluar{{ $keluar->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Detail Surat Keluar {{ $keluar->kodesk }}</h5>
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
                                                {{ $keluar->kodesk }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Nomor Surat</b>
                                            </td>
                                            <td>:
                                                {{ $keluar->nomor }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Tujuan Surat</b>
                                            </td>
                                            <td>:
                                                {{ $keluar->tujuan }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Tanggal Surat</b>
                                            </td>
                                            <td>:
                                                {{ $keluar->tanggal }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Lampiran Surat</b>
                                            </td>
                                            <td>:
                                                {{ $keluar->lamp }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Perihal Surat</b>
                                            </td>
                                            <td>:
                                                {{ $keluar->prihal }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Alamat Surat</b>
                                            </td>
                                            <td>:
                                                {{ $keluar->alamat }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Keterangan Surat</b>
                                            </td>
                                            <td>:
                                                {{ $keluar->keterangan }} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px">
                                                <b>Waktu upload</b>
                                            </td>
                                            <td>:
                                                {{ $keluar->created_at }} </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        @if ($keluar->pdf)
                        <embed type="application/pdf" src="{{ asset('storage/' . $keluar->pdf) }}" width="100%"
                            height="100%" class="p-1" style="border-radius: 10px"></embed>
                        @endif
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a data-bs-dismiss="modal" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </div>
</div>

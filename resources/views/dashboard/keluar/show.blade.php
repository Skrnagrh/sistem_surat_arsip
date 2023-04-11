{{-- @extends('layouts.dashboard')

@section('content')
    <div id="layoutSidenav" class="m-4">
        <div id="layoutSidenav_content">


            <a href="/dashboard/keluar" class="btn btn-sm btn-outline-success">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <a href="/dashboard/keluar/{{ $keluar->id }}/edit" class="btn btn-sm btn-outline-warning ">
                <i class="bi bi-pen"></i>
                <strong>Edit</strong>
            </a>
            <form action="/dashboard/keluar/{{ $keluar->id }}" method="post" class="d-inline"> @method('delete')
                @csrf
                <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')"> <i
                        class="bi bi-trash"></i>
                    Delete</button>
            </form>

            <div class="card shadow border-bottom-primary my-3">
                <div class="card-header p-0">
                    <a href="#suratkeluar" class="d-block card-header" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="suratkeluar">
                        <h2 class="m-0 font-weight-bold text-dark">
                            <strong>S</strong>urat <strong>K</strong>eluar <strong>U</strong>ntuk {{ $keluar->tujuan }}</h2>
                    </a>
                </div>

                <div class="row p-3" id="suratkeluar">
                    <div class="col-lg-5">
                        <table class="table lg-5">
                            <tbody>
                                <tr>
                                <tr>
                                    <th scope="row">Nomor Surat</th>
                                    <td>:</td>
                                    <td>{{ $keluar->nomor }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tujuan</th>
                                    <td>:</td>
                                    <td>{{ $keluar->tujuan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Surat</th>
                                    <td>:</td>
                                    <td>{{ $keluar->tanggal }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lampiran Surat</th>
                                    <td>:</td>
                                    <td>{{ $keluar->lamp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perihal Surat</th>
                                    <td>:</td>
                                    <td>{{ $keluar->prihal }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat Surat</th>
                                    <td>:</td>
                                    <td>{{ $keluar->alamat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan </th>
                                    <td>:</td>
                                    <td>{{ $keluar->keterangan }}</td>
                                </tr>
                                <th scope="row">Waktu upload</th>
                                <td>:</td>
                                <td>{{ $keluar->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-7">
                        @if ($keluar->pdf)
                            <embed type="application/pdf" src="{{ asset('storage/' . $keluar->pdf) }}" width="100%"
                                height="100%" class="p-1" style="border-radius: 10px"></embed>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection --}}


<div class="modal fade" id="keluar{{ $keluar->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <h3 class="card-title">Detail Surat Keluar</h3>
                        </div>
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
            <a href="/dashboard/keluar" class="btn btn-sm btn-danger">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
      </div>
    </div>
  </div>

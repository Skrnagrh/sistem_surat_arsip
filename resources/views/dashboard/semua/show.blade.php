{{-- @extends('layouts.dashboard')

@section('content')

    <div id="layoutSidenav" class="m-4">
        <div id="layoutSidenav_content">


            <a href="/dashboard/semua" class="btn btn-sm btn-outline-success">
                <i class="bi bi-arrow-left"></i>
                <strong>Back</strong>
            </a>

            <a href="/admin/surat/masuk/{{ $masuk->id }}/edit" target="_blank" class="btn btn-outline-secondary btn-sm m-1"><i class="bi bi-printer-fill"></i> <strong>Print</strong>
            </a>

            <div class="card shadow border-bottom-primary my-3">
                <div class="card-header p-0">
                    <a href="#suratmasuk" class="d-block card-header" data-toggle="collapse" role="button"
                        aria-expanded="true" aria-controls="suratmasuk">
                        <h2 class="m-0 font-weight-bold text-dark"><strong>S</strong>urat <strong>M</strong>asuk <strong>D</strong>ari
                            {{ $masuk->pengirim }}</h2>
                    </a>
                </div>

                <div class="row p-3" id="suratmasuk">
                    <div class="col-lg-5">
                        <table class="table lg-5">
                            <tbody class="text-dark">
                                <tr>
                                <tr>
                                    <th scope="row">Nomor Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->nomor }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pengirim</th>
                                    <td>:</td>
                                    <td>{{ $masuk->pengirim }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->tanggal }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lampiran Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->lamp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Perihal Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->prihal }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat Surat</th>
                                    <td>:</td>
                                    <td>{{ $masuk->alamat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan </th>
                                    <td>:</td>
                                    <td>{{ $masuk->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Petugas</th>
                                    <td>:</td>
                                    <td>{{ $masuk->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Waktu upload</th>
                                    <td>:</td>
                                    <td>{{ $masuk->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-7">
                        @if ($masuk->pdf)
                            <embed type="application/pdf" src="{{ asset('storage/' . $masuk->pdf) }}" width="100%"
                                height="100%" class="p-1" style="border-radius: 10px"></embed>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection --}}


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
                                <h3 class="card-title">Detail Arsip Surat Masuk</h3>
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
                                                <b>Nama Petugas</b>
                                            </td>
                                            <td>: {{ $masuk->nama }}</td>
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
                <a href="/dashboard/semua/masuk" class="btn btn-sm btn-danger">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>

                <a class="no-print btn btn-secondary btn-sm" href="javascript:print1Masuk('print-1');"><i
                        class="bi bi-printer"></i> Print</a>
            </div>
        </div>
    </div>
</div>

<div id="print-1" class="print-1" style="display: none">
    <div class="row justify-content-center text-center mx-2">
        <table border="1" class="table table-bordered table-sm">
            <thead class="text-center">
                <tr>
                    <th style="justify-content: flex-end; width: 100%;" colspan="10">
                        <img src="/logo/Kop-surat.png" class="img-fluid" style="max-height: 200px; border: #009970">
                    </th>
                </tr>
                <tr>
                    <th colspan="10"><strong>Surat Masuk</strong></th><br>
                </tr>
                <tr>
                    <th colspan="10"><strong>Created By : {{ auth()->user()->name }}</strong></th><br>
                </tr>
            </thead>
            <tbody class="text-capitalize">
                <tr>
                    <td style="width: 150px">
                        <b>Kode Arsip</b>
                    </td>
                    <td>{{ $masuk->kodesm }} </td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Nomor Surat</b>
                    </td>
                    <td>{{ $masuk->nomor }} </td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Pengirim</b>
                    </td>
                    <td>{{ $masuk->pengirim }} </td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Tanggal</b>
                    </td>
                    <td>{{ $masuk->tanggal }} </td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Lampiran</b>
                    </td>
                    <td>{{ $masuk->lamp }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Perihal Surat</b>
                    </td>
                    <td>{{ $masuk->prihal }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Alamat Surat</b>
                    </td>
                    <td>{{ $masuk->alamat }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Keterangan Surat</b>
                    </td>
                    <td>{{ $masuk->keterangan }} </td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Nama Petugas</b>
                    </td>
                    <td>{{ $masuk->nama }}</td>
                </tr>
                <tr>
                    <td style="width: 150px">
                        <b>Waktu upload</b>
                    </td>
                    <td>{{ $masuk->created_at }} </td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th style="display: none"></th>
                    <th colspan="7"><span id="date_time"></span></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<textarea id="printing-1" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="0"] caption{border:none;font-style:italic}.no-print{display:none}, colspan, rowspan</textarea>
<iframe id="printing-frame1" name="print_masuk" src="about:blank" style="display:none;"></iframe>
<script>
    function print1Masuk(elementId) {
        var a = document.getElementById('printing-1').value;
        var b = document.getElementById(elementId).innerHTML;
        window.frames["print_masuk"].document.title = document.title;
        window.frames["print_masuk"].document.body.innerHTML = '<style>' + a + '</style>' + b;
        window.frames["print_masuk"].window.focus();
        window.frames["print_masuk"].window.print();
    }
</script>
<script type="text/javascript" src="/dashboard/js/datetime.js"></script>
<script type="text/javascript">
    window.onload = date_time('date_time');
</script>

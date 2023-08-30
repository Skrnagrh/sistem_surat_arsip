<div class="modal fade" id="printin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Print {{ $title }}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <div id="print-area" class="print-area">
                    <div class="row justify-content-center text-center mx-2">
                        <table border="1" class="table table-bordered table-sm">
                            <thead class="text-center">
                                <tr>
                                    <th style="justify-content: flex-end; width: 100%;" colspan="11">
                                        <img src="/logo/Kop-ipt.png" class="img-fluid"
                                            style="max-height: 200px; border: #009970">
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="11"><strong>Report All Surat Masuk</strong></th><br>
                                </tr>
                                <tr>
                                    <th colspan="11"><strong>Created By {{ auth()->user()->name }}</strong></th><br>
                                </tr>
                                <tr>
                                    <th colspan="11"><span id="date_time"></span></th>
                                </tr>
                            </thead>
                            <thead>
                                <tr class="text-dark">
                                    <th><strong>No</strong></th>
                                    <th><strong>Nama Petugas</strong></th>
                                    <th><strong>kode Arsip</strong></th>
                                    <th><strong>Nomor Surat</strong></th>
                                    <th><strong>Pengirim Surat</strong></th>
                                    <th><strong>Tanggal Surat</strong></th>
                                    <th><strong>Lampiran Surat</strong></th>
                                    <th><strong>Perihal Surat</strong></th>
                                    <th><strong>Alamat Surat</strong></th>
                                    <th><strong>Keterangan Surat</strong></th>
                                    <th><strong>Waktu Upload</strong></th>
                                </tr>
                            </thead>
                            <tbody style="text-transform: capitalize;">
                                @foreach ($masuk1 as $masuk)
                                    <tr>
                                        <td><strong>{{ $loop->iteration }}</strong></td>
                                        <td>{{ $masuk->nama }}</td>
                                        <td>{{ $masuk->kodesm }}</td>
                                        <td>{{ $masuk->nomor }}</td>
                                        <td>{{ $masuk->pengirim }}</td>
                                        <td>{{ $masuk->tanggal }}</td>
                                        <td>{{ $masuk->lamp }}</td>
                                        <td>{{ $masuk->prihal }}</td>
                                        <td>{{ $masuk->alamat }}</td>
                                        <td>{{ $masuk->keterangan }}</td>
                                        <td>{{ $masuk->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a data-bs-dismiss="modal" aria-label="Close" class="btn btn-danger">Batal                </a>
                <a class="no-print btn btn-secondary" href="javascript:printDiv('print-area');">Print</a>
            </div>
        </div>
    </div>
</div>

<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="0"] caption{border:none;font-style:italic}.no-print{display:none}, colspan, rowspan</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script>
    function printDiv(elementId) {
        var a = document.getElementById('printing-css').value;
        var b = document.getElementById(elementId).innerHTML;
        window.frames["print_frame"].document.title = document.title;
        window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
</script>

<script type="text/javascript" src="/dashboard/js/datetime.js"></script>
<script type="text/javascript">
    window.onload = date_time('date_time');
</script>

<div class="modal fade" id="printkeluar{{ $keluar->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="print-1{{ $keluar->id }}" class="print-1">
                    <table border="1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="justify-content: flex-end; width: 35%; padding: 50px;" colspan="6">
                                    <img src="/logo/kop.png" class="img-fluid"
                                        style="max-height: 80px; border: #009970">
                                </th>
                            </tr>
                            <tr>
                                <td colspan="6"></td>
                            </tr>

                        </thead>
                        <tbody style="text-transform: capitalize;">
                            <tr>
                                <td style="width: 10%"><strong>Kode Arsip</strong></td>
                                <td colspan="4">{{ $keluar->kodesk }}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><strong>Nomor Surat</strong></td>
                                <td colspan="4">{{ $keluar->nomor }}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><strong>Tujuan Surat</strong></td>
                                <td colspan="5">{{ $keluar->tujuan }}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><strong>tanggal Surat</strong></td>
                                <td colspan="5">{{ $keluar->tanggal }}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><strong>Lampiran Surat</strong></td>
                                <td colspan="5">{{ $keluar->lamp }}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><strong>prihal Surat</strong></td>
                                <td colspan="5">{{ $keluar->prihal }}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><strong>alamat Surat</strong></td>
                                <td colspan="5">{{ $keluar->alamat }}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><strong>keterangan Surat</strong></td>
                                <td colspan="5">{{ $keluar->keterangan }}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%"><strong>waktu Upload</strong></td>
                                <td colspan="5">{{ $keluar->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/dashboard/keluar" class="btn btn-sm btn-danger">
                    <i class="bi bi-x-circle"></i> <strong>Batal</strong>
                </a>
                <a class="no-print btn btn-secondary btn-sm" href="javascript:printDiv('print-1{{ $keluar->id }}');"><i
                        class="bi bi-printer"></i> Print</a>
            </div>
        </div>
    </div>
</div>


<textarea id="printing-css-1" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="0"] caption{border:none;font-style:italic}.no-print{display:none}, colspan, rowspan</textarea>
<iframe id="printing-frame-1" name="print_frame-1" src="about:blank" style="display:none;"></iframe>
<script>
    function printDiv(elementId) {
        var a = document.getElementById('printing-css-1').value;
        var b = document.getElementById(elementId).innerHTML;
        window.frames["print_frame-1"].document.title = document.title;
        window.frames["print_frame-1"].document.body.innerHTML = '<style>' + a + '</style>' + b;
        window.frames["print_frame-1"].window.focus();
        window.frames["print_frame-1"].window.print();
    }
</script>
<script type="text/javascript" src="/dashboard/js/datetime.js"></script>
<script type="text/javascript">
    window.onload = date_time('date_time');
</script>

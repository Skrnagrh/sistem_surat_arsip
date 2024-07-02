<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/logo/logo.png" type="image/png">
    <title>Halaman {{ $title }}</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/dashboard/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/dashboard/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/dashboard/plugins/summernote/summernote-bs4.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="/dashboard/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="modal fade" id="confirmLogoutModal" tabindex="-1" role="dialog"
        aria-labelledby="confirmLogoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmLogoutModalLabel">Konfirmasi Keluar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin keluar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.partials.navbar')

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        @include('dashboard.partials.sidebar')
    </aside>

    <div class="content-wrapper">
        <div class="content-header mt-5">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 font-weight-bold fs-5">Halaman {{ $title }}</h1>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <section class="content">
            <div class="container-fluid">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" tabindex="-1">
                    <strong>{{ session('success') }}!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-error alert-dismissible fade show" role="alert" tabindex="-1">
                    <strong>{{ session('error') }}!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @yield('content')
            </div>
        </section>


    </div>
    @include('dashboard.partials.footer')

    <script>
        // Cari elemen dengan kelas 'alert-success'
        var successAlert = document.querySelector('.alert-success');

        // Jika elemen ditemukan, tampilkan selama 5 detik
        if (successAlert) {
            successAlert.style.display = 'block';
            setTimeout(function () {
                successAlert.style.display = 'none';
            }, 5000); // Menampilkan selama 5000 milidetik (5 detik)
        }
    </script>

    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#datatable').DataTable();
    });
    </script>

    <script src="/dashboard/plugins/jquery/jquery.min.js"></script>
    <script src="/dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dashboard/plugins/chart.js/Chart.min.js"></script>
    <script src="/dashboard/plugins/sparklines/sparkline.js"></script>
    <script src="/dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="/dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="/dashboard/plugins/moment/moment.min.js"></script>
    <script src="/dashboard/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/dashboard/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/dashboard/dist/js/adminlte.js"></script>
    <script src="/dashboard/dist/js/demo.js"></script>
    <script src="/dashboard/dist/js/pages/dashboard.js"></script>



    <script src="/dashboard/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/dashboard/plugins/jszip/jszip.min.js"></script>
    <script src="/dashboard/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/dashboard/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
    </script>

</body>

</html>

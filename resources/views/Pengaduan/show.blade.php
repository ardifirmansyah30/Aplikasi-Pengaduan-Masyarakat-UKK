<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tanggapan</title>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->


    <!-- Sidebar -->
    @include('template.sidebar')
    <!-- /.sidebar -->
</aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                @if(session('Data ditambah'))
                <div class="alert alert-primary" role="alert">
                        {{session('Data ditambah')}}
                    </div>
                    @endif
                    @if(session('Data dihapus'))
                    <div class="alert alert-danger" role="alert">
                        {{session('Data dihapus')}}
                    </div>
                    @endif
                    @if(session('Data diedit'))
                    <div class="alert alert-primary" role="alert">
                        {{session('Data diedit')}}
                    </div>
                    @endif
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

        <div class="container">
                <div class="card mt-5">
                        <div class="card-header">
                            <div class="text-center">Laporan Anda</div>
                        </div>
                            <form method="post" action="/masyarakat/pengaduan/">
                            <div class="card-body">
                            <a href="/pengaduan" class="btn btn-sm btn-info">Kembali</a>
                                    <div class="mb-3 row">
                                        <label for="isi_laporan" class="col-sm-2 col-form-label">Laporan Anda</label>
                                        <div class="col-sm-10">
                                            <b>:</b> {{ $pengaduan->isi_laporan }}
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tgl_pengaduan" class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
                                        <div class="col-sm-10">
                                            <b>:</b> {{ $pengaduan->tgl_pengaduan }}
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tgl_pengaduan" class="col-sm-2 col-form-label">Tanggapan</label>
                                        <div class="col-sm-10">
                                            <b>:</b> {{ $tanggapan->tanggapan ??'belum ada tanggapan' }}
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            @if($pengaduan->status == "0")
                                <a href='#' class="badge badge-danger">Pending</a>
                                @elseif($pengaduan->status == "proses")
                                <a href="#" class="badge badge-warning text-white">Sedang Di Proses</a>
                                @else($pengaduan->status == "selesai")
                                <a href="#" class="badge badge-success">Selesai</a>
                                @endif
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            @if ($pengaduan->foto)
                                                <img src="{{ asset('image/'. $pengaduan->foto ) }}" height="50%" width="60%" alt="Foto Pengaduan" class="embed-responsive">
                                            @else
                                                <a href="#" class="badge badge-danger">Tidak Ada Foto</a>
                                            @endif
                                        </div>
                            </form>
                </div>
            </div>
  <!-- /.content -->
  </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.script')
</body>

</html>

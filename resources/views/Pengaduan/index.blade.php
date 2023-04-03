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
    <title>Pengaduan</title>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <h4></h4>
            <a href="/beranda" class="brand-link">
                <img src="pikachu.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>PEKAT</b></span>
            </a>

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
                <div class="card-header text-center">
                     Pengaduan Masyarakat</a>
                </div>
                <div class="card-body">
                @if (auth()->user()->level == 'masyarakat')
                <a href="/pengaduan/create" class="btn btn-primary">Laporkan</a>
                    @endif
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                           
                                <th>Isi Pengaduan</th>
                                <th>Foto</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Status</th>
                                <!-- <th>Tanggapan</th> -->
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                           
                                <td>{{ $p->isi_laporan }}</td>
                                <td><img src="{{ asset('image/'. $p->foto ) }}" height="50%" width="100%" alt="pengaduan"/></td>
                                <td>{{ $p->tgl_pengaduan }}</td>
                               <th>
                                    @if($p->status == "0")
                                <a href='#' class="badge badge-danger">Pending</a>
                                @elseif($p->status == "proses")
                                <a href="#" class="badge badge-warning text-white">Sedang Di Proses</a>
                                @else($p->status == "selesai")
                                <a href="#" class="badge badge-success">Selesai</a>
                                @endif
                                    </th>
                                    <!-- <td>{{ $p->tanggapan ??'belum ditanggapi'}}</td> -->
                                <td>
                                <!-- <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="btn btn-warning">Edit</a> -->
                                <!-- <a href="/pengaduan/destroy/{{ $p->id_pengaduan }}" class="btn btn-warning">Hapus</a> -->
                                <!-- <a href="/pengaduan/show/{{ $p->id_pengaduan }}" class="btn btn-info">Lihat Tanggapan</a> -->
                                <a href="/pengaduan/show/{{ $p->id_pengaduan }}" class="btn
                                btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16
                                16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5
                                3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg>
                                <a href="/pengaduan/cetak_pdf/{{ $p->id_pengaduan }}" class="btn btn-danger"><i class="fa fa-print"></i></a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                </div>
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
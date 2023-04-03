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
                    Data Tanggapan</a>
                </div>
                <div class="card-body">
                @if (auth()->user()->level == 'petugas')
                    <a href="/tanggapan/create" class="btn btn-primary">Input Data Tanggapan</a>
                    @endif
                    <a href="{{ route('cetak') }}" target="_blank" class="btn btn-info"><i class="fa fa-print"></i></a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Laporan</th>
                                <th>Tanggal Tanggapan</th>
                                <th>Tanggapan</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $p)
                            <tr>
                            <td>{{ $p->isi_laporan }}</td>
                                <td>{{ $p->tgl_tanggapan }}</td>
                                <td>{{ $p->tanggapan }}</td>
                                <th>
                                    @if($p->status == "0")
                                <a href='#' class="badge badge-danger">Pending</a>
                                @elseif($p->status == "proses")
                                <a href="#" class="badge badge-warning text-white">Sedang Di Proses</a>
                                @else($p->status == "selesai")
                                <a href="#" class="badge badge-success">Selesai</a>
                                @endif
                                    </th>
                                <td>
                                    <!-- <a href="/tanggapan/edit/{{ $p->id_tanggapan }}" class="btn btn-warning">Edit</a> -->
                                    <a href="/tanggapan/destroy/{{ $p->id_tanggapan }}" class="fas fa-trash" style="color: red"></a>                                
                                        <!-- <a href="/tanggapan/show/{{ $p->id_tanggapan }}" class="btn btn-dark">Detail</a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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

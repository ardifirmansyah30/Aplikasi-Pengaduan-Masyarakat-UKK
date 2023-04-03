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
                    Data Tanggapan <strong>DETAIL TANGGAPAN</strong> <a href="https://www.malasngoding.com/category/laravel" target="_blank"></a>
                </div>
                <div class="card-body">
                    <br>
                    <br>
                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Tanggapan</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            {{$tanggapan->tanggapan}}
                                        </div>
                                    </div>

                        <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Tanggal Tanggapan</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                            {{$tanggapan->tgl_tanggapan}}
                                        </div>
                                    </div>

                        <div class="mb-3 row">
                                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <b>:</b>
                                                @if ($tanggapan->status == '0')
                                                <a href="#" class="badge badge-warning">Pending</a>
                                                @elseif ($tanggapan->status == 'proses')
                                                    <a href="#" class="btn btn-warning">Proses</a>
                                                @else
                                                    <a href="#" class="btn btn-success">Selesai</a>
                                                @endif
                                        </div>
                                    </div>

        
                        <a href="/tanggapan" class="btn btn-info">Kembali</a>
                    </form>
 
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

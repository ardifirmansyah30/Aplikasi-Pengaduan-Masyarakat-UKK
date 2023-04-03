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
            <strong>LAPORKAN</strong>
                </div>
                <div class="card-body">
                    <br/>
                    <br/>
                    
                    <form method="post" action="/pengaduan/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}

                    
 
                        <!-- <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control" placeholder="">
 
                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
 
                        </div> -->
 
                        <div class="form-group">
                                            <label for="val-username">Keluhan Anda</label>
                                            <div class="col-lg-6">
                                                <textarea name="isi_laporan" class="form-control" id="" cols="30" rows="10"></textarea>
                                                @if($errors->has('isi_laporan'))
                                            <div class="text-danger">
                                                {{ $errors->first('isi_laporan')}}
                                            </div>
                                        @endif
                                            </div>
                                        </div>

                            <!-- <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" placeholder="">
 
                            @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
 
                        </div> -->
 
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control" placeholder="">
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif

                            </div>
 
                        <!-- <div class="form-group">
                            <p>Status</p>
                            <input type="radio" id="proses" name="status" value="proses" />Proses</p>
                            <input type="radio" id="selesai" name="status" value="selesai" />Selesai</p>
                           
 
                             @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif

                        <div class="form-group"> -->
                            <input type="submit" class="btn btn-success" value="Laporkan">
                            <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                        </div>
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
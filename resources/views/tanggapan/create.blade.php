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
                   <strong>Tambah Data</strong>  
                </div>
                    
                    <form method="post" action="/tanggapan/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                                            <label class="col-lg-4 col-form-label" for="val-ngadu">Pengaduan  </label>
                                            <div class="col-lg-6">
                                                <select name="id_pengaduan" id="" class="form-control">
                                                    <option value="">-- Pilih Pengaduan --</option>
                                                    <!-- Barang -->
                                                    @foreach($pengaduan as $pengaduan)
                                                        <option value="{{ $pengaduan->id_pengaduan }}">{{ $pengaduan->isi_laporan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
 
                        <div class="form-group">
                            <label>Tanggapan</label>
                            <input type="text" name="tanggapan" class="form-control" placeholder="tanggapan">
 
                            @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status</label>
        <select name="status" class="form-control" id="exampleFormControlSelect1">

            <option value="proses" >Proses</option>
            <option value="selesai" >Selesai</option>

        </select>
    </div>

                     
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/tanggapan" class="btn btn-primary">Kembali</a>
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
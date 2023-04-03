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
        <div class="card-body">
                    <h4 class="page-title"><strong>Profile</strong></h4>
                    <!-- <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-6">
                                <img class="product" width="200" height="200" />
                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar">
                            </div>
                        </div> -->
                            
                        <div class="form-group">
                            <div class="col-md-6">
                            <img src="{{ asset('image/2.webp') }}" height="50%" width="50%" alt=""/>
                                <!-- <img class="product" width="100" height="200" /> -->
                                <!-- <input type="file" class="uploads form-control" style="margin-top: 20px;" name="gambar"> -->
                            </div>
                        </div>
                        <td>
                    <div class="row">
                        <div class="col-sm-6 col-md-5 col-lg-6">
                        <div class="form-group">
                            <strong>Nik</strong>
                            <b>:</b>
                            {{ $user->nik }}
                            </div>

                            <div class="form-group">
                            <strong>Nama</strong>
                                 <b>:</b>
                            {{ $user->nama }}
                            </div>

                            <div class="form-group">
                            <strong>Email</strong>
                            <b>:</b>
                            {{ $user->email }}
                            </div>

                            <div class="form-group">
                            <strong>No Telepon</strong>
                            <b>:</b>
                            {{ $user->telp }}
                            </div>

                            <div class="form-group">
                            <strong>Jenis Kelamin</strong>
                            <b>:</b>
                            {{ $user->jenis_kel }}
                            </div>

                            <div class="form-group">
                            <strong>Level</strong>
                            <b>:</b>
                            {{ $user->level }}
                            </div>

                            <div class="form-group">
                            <strong>Alamat</strong>
                            <b>:</b>
                            {{ $user->alamat }}
                            </div>
                        </form>

                        </div>
                        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                            <div class="form-group">
                            <strong>Rt</strong>
                            <b>:</b>
                            {{ $user->rt }}
                            </div>

                            <div class="form-group">
                            <strong>Rw</strong>
                            <b>:</b>
                            {{ $user->rw }}
                            </div>

                            <div class="form-group">
                            <strong>Kode Pos</strong>
                            <b>:</b>
                            {{ $user->kode_pos }}
                            </div>

                            <div class="form-group">
                            <strong>Provinsi</strong>
                            <b>:</b>
                            {{ $user->province->name}}
                            </div>

                            <div class="form-group">
                            <strong>Kabupaten / Kota</strong>
                            <b>:</b>
                            {{ $user->district->name }}
                            </div>

                            <div class="form-group">
                            <strong>Kecamatan</strong>
                            <b>:</b>
                            {{ $user->regency->name }}
                            </div>

                            <div class="form-group">
                            <strong>Kelurahan</strong>
                            <b>:</b>
                            {{ $user->Village->name }}
                            </div>
                            <br>
                        </div>
                        </div>
                        </td>
                        
                            <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                            <a href="/logout" class="btn btn-danger">LogOut</a>
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

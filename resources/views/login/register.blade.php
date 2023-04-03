<!DOCTYPE html>

<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register </title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css')}}" />
    
    

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    
    

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css')}}">
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js')}}"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">

      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="#" class="app-brand-link gap-2">
            </a>
          </div>
          <!-- /Logo -->
          <form id="formAuthentication" class="mb-3" action="{{ route('simpanregister') }}" method="POST">
          @csrf
            <div class="mb-3">
              <label for="nik" class="form-label">NIK</label>
              <input type="number" class="form-control" id="nik" name="nik" placeholder="Enter your NIK" autofocus>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3 col-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3 form-password-toggle col-auto">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
              <label for="telp" class="form-label">No. Telp</label>
              <input type="number" class="form-control" id="telp" name="telp" placeholder="08**">
            </div>
            <div class="mb-3">
              <label for="jenis_kel" class="mb-2">Jenis Kelamin </label> <br>
                <input type="radio" name="jenis_kel" value="laki-laki" checked>  Laki-Laki
                <input type="radio" name="jenis_kel" value="perempuan">  Perempuan
            </div>
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3 col-auto">
                    <label for="rt" class="form-label">RT</label>
                    <input type="number" class="form-control" id="rt" name="rt">
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3 col-auto">
                    <label for="rw" class="form-label">RW</label>
                    <input type="number" class="form-control" id="rw" name="rw">
                    </div> 
                </div>
            </div>
            <div class="mb-3">
              <label for="kode_pos" class="form-label">Kode Pos</label>
              <input type="number" class="form-control" id="kode_pos" name="kode_pos">
            </div>
            <div class="mb-3">
                <label class="form-label">Provinsi</label>
                <select name="province_id" id="provinsi" class="form-select">
                <option selected>-Pilih Provinsi-</option>
                    @foreach($provinces as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
              <label for="kode_pos" class="form-label">Kabupaten</label>
                <select name="regency_id" id="kabupaten"  class="form-select">
                </select>
            </div>
            <div class="mb-3">
              <label for="kode_pos" class="form-label">Kecamatan</label>
              <select name="district_id" id="kecamatan"  class="form-select">
                </select>
            </div>
            <div class="mb-3">
              <label for="kode_pos" class="form-label">Desa</label>
              <select name="village_id" id="desa"  class="form-select">
                </select>
            </div>
            
            <div class="mb-3">
            </div>
            <button type="submit" class="btn btn-primary d-grid w-100">
              Sign up
            </button>
          </form>

          <p class="text-center">
            <span>Sudah Punya Akun?</span>
            <a href="{{ route('login') }}">
              <span>Login Disini</span>
            </a>
          </p>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>

<!-- / Content -->

  

  
  <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div>
  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{ asset('assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  
  <script src="{{ asset('assets/vendor/js/menu.js')}}"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  
  

  <!-- Main JS -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

  <!-- Page JS -->
  
  
  
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script>
        $(function() {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
            });

            $(function(){
                $('#provinsi').on('change',function(){
                    let id_provinsi = $('#provinsi').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkabupaten')}}",
                        data : {id_provinsi:id_provinsi},
                        cache : false,

                        success: function(msg){
                            $('#kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#desa').html('');
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })

                $('#kabupaten').on('change',function(){
                    let id_kabupaten = $('#kabupaten').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getkecamatan')}}",
                        data : {id_kabupaten:id_kabupaten},
                        cache : false,

                        success: function(msg){
                            $('#kecamatan').html(msg);
                            $('#desa').html('');
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })

                $('#kecamatan').on('change',function(){
                    let id_kecamatan = $('#kecamatan').val();
                    
                    $.ajax({
                        type : 'POST',
                        url : "{{route('getdesa')}}",
                        data : {id_kecamatan:id_kecamatan},
                        cache : false,

                        success: function(msg){
                            $('#desa').html(msg);
                        },
                        error: function(data){
                            console.log('error:',data);
                        },
                    })
                })
            });
        });
  </script>
  
</body>

</html>
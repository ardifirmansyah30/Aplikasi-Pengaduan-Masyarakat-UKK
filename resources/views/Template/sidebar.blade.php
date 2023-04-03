<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <h4></h4>
            <a ></h4>
            <a href="/beranda" class="brand-link">
                <!-- <img src="polos.jpg" class="brand-image img-circle elevation-3" style="opacity: 50"> -->
                <marquee behavior="" direction=""><span class="brand-text font-weight-light"><b>PENGADUAN MASYAKARAKAT</span></marquee>
            </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="/beranda" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if (auth()->user()->level != 'masyarakat')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <!-- <i class="fas fa-angle-left right"></i> -->
                        </p>
                    </a>
                      @endif
                    @if (auth()->user()->level != 'masyarakat')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/tanggapan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tanggapan</p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="/pengaduan" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengaduan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Pengaduan Terbaru</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Pengaduan Masyarakat</a>
                </div>
                <div class="card-body">
                    <!-- <a href="/tanggapan/create" class="btn btn-primary">Laporkan</a> -->
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>   
                                <th>Laporan Masyarakat</th>
                                <th>Tanggal Tanggapan</th>
                                <th>Isi Tanggapan</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $p)
                            <tr>
                                <td>{{ $p->id_tanggapan }}</td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->tgl_pengaduan }}</td>
                                <td>{{ $p->isi_laporan }}</td>
                                <td>{{ $p->foto }}</td>
                                <td>
                                <!-- <a href="/pengaduan/destroy/{{ $p->id_pengaduan }}" class="btn btn-danger">Hapus</a> -->
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </body>
</html>
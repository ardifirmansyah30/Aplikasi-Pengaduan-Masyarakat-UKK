
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan Terbaru</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Pengaduan Masyarakat</a>
                </div>
                <div class="card-body">
                    <a href="/pengaduan/create" class="btn btn-primary">Laporkan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>   
                                <th>NIK</th>
                                <th>Tanggal Pengaduan</th>
                                <th>Isi Pengaduan</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                                <td>{{ $p->id_pengaduan }}</td>
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
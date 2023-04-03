<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            /*left: 3%; */
            border: 1px solid #543535;
        }
        </style>
        <title>CETAK DATA PENGADUAN</title>
    </head>
    <body>
        <div class="form-group">
            <p align="center"><b>Laporan Data Pengaduan</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                                <th>Laporan</th>
                                <th>Tanggal Tanggapan</th>
                                <th>Tanggapan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cetaktanggapan as $p)
                            <tr>
                            <td>{{ $p->isi_laporan }}</td>
                                <td>{{ $p->tgl_tanggapan }}</td>
                                <td>{{ $p->tanggapan }}</td>
                                <th>
                                @if($p->status == "0")
                                <a href='#' class="badge badge-danger">Pending</a>
                                @elseif($p->status == "proses")
                                <a href="#" class="badge badge-warning text-white">Proses</a>
                                @else($p->status == "selesai")
                                <a href="#" class="badge badge-success">Selesai</a>
                                @endif
                                    </th>
                @endforeach
        </table>
    </div>
    <div class="form-group">
        <a href="/tanggapan" class="btn btn-primary">Kembali</a>
    </div>
    <script type="text/javascript">
        window.print();

        </script>
</body>
</html>

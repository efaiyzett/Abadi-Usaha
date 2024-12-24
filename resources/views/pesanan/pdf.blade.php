<html>
    <head>
        <title>Cetak PDF</title>
    </head>
    <body>
        <style type="text/css">
            .table1 {
                font-family: sans-serif;
                color: #232323;
                border-collapse: collapse;
            }

            .table1, th, td {
                border: 1px solid #999;
                padding: 8px 20px;
            }
        </style>
        <h4 align="center">Laporan Data Pesanan</h4>
            <table class="table table-bordered table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width:5%">No.</th>
                        <th style="width:7%">ID</th>
                        <th style="width:12%">Nama</th>
                        <th style="width:12%">Alamat</th>
                        <th style="width:12%">No HP</th>
                        <th style="width:12%">Jenis Layanan</th>
                        <th style="width:12%">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataPesanan as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->no_hp }}</td>
                        <td>{{ $data->Layanan->jenis }}</td>
                        <td>{{ $data->harga }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script type="text/javascript">
                window.print()
            </script>
    </body>
</html>
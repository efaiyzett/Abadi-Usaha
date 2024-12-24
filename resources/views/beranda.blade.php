@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to right, #3C3B8B, #222161);
        }

        h1 {
            font-size: 6rem;
            margin: 0;
        }

        h3 {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .isi {
            position: absolute;
            top: 50%;
            left: 0;
            padding-left: 20px;
            transform: translateY(-50%);
            text-align: left;
            color: white;
        }
    </style>
</head>
<body>
    <div class="isi container">
        <h1>Membantu Melancarkan <br> Saluran WC</h1>
        <h3><b>Abadi Usaha</b> hadir untuk temukan pilihan terbaik <br> untuk membersihkan saluran rumah anda</h3>
        <br>
        <a href="tambah-pesanan" class="btn btn-primary btn-lg">PESAN</a>
    </div>
</body>
</html>
@endsection

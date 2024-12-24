@extends('layouts.master')

@section('title', 'Tentang Kami')

@section('content')
<head>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background: linear-gradient(to right, #3C3B8B, #222161);
        }

        h1, p {
            color: white;
        }

        .content-wrapper {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Menempatkan elemen lebih dekat ke atas */
            align-items: center; /* Memusatkan elemen secara horizontal */
        }

        .text-section {
            text-align: center;
            margin-bottom: 10px; /* Mengurangi jarak dengan bagian di bawahnya */
        }

        .card-section {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .card {
            background: linear-gradient(145deg, #ffffff, #f3f3f3);
            border-radius: 10px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            margin: 0 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.2);
        }

        .card .card-header {
            background: #3C3B8B;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 15px;
            font-size: 1.25rem;
        }

        .card-body {
            padding: 20px;
            font-size: 1rem;
        }

        .card-body p {
            margin: 5px 0;
            color: #333;
        }

        .card-body strong {
            color: #3C3B8B;
        }
    </style>
</head>
<div class="container content-wrapper">
    <!-- Bagian teks di atas -->
    <div class="text-section">
        <h1 class="display-4">Tentang Abadi Usaha</h1>
        <p class="lead">Abadi Usaha adalah perusahaan penyedia jasa sedot dan pelancaran yang telah berdiri sejak tahun 1988. Berlokasi di Jalan Imam Bonjol No. 68 Ngadirejo, Kota Kediri, kami telah melayani masyarakat Kediri dan sekitarnya selama puluhan tahun.</p>
        <p>Dengan tim inti yang terdiri dari 3 orang tenaga ahli, kami berkomitmen memberikan layanan terbaik untuk memenuhi kebutuhan pelanggan kami dalam bidang sedot dan pelancaran.</p>
    </div>

    <!-- Bagian kartu di bawah -->
    <div class="card-section">
        <div class="card">
            <div class="card-header">
                OWNER
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> Susiyati</p>
                <p><strong>Alamat:</strong> Jalan Imam Bonjol No. 68 Ngadirejo, Kota Kediri</p>
                <p><strong>Telepon:</strong> 082142395050</p>
                <p><strong>Email:</strong> abadiusaha68@gmail.com</p>
            </div>
        </div>
    </div>
</div>
@endsection

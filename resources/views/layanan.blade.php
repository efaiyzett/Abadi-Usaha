@extends('layouts.master')

@section('title', 'Layanan Kami')

@section('content')
<div class="container my-4 text-center" style="background: linear-gradient(to right, #3C3B8B, #222161); height: 100%; padding: 50px 0; border-radius: 15px;">
    <h2 class="text-white" style="font-weight: bold;">Layanan Kami</h2>
    <p class="text-light">Aneka Menu</p>
    
    <div class="row justify-content-center">
            <!-- Card 1 -->
        <div class="col-md-4">
            <div 
                class="card layanan-card shadow-lg mb-4" 
                data-click-count="0"
                style="border-radius: 15px; background-color: white; transition: transform 0.2s, background-color 0.2s;"
                onclick="toggleCardContent(this, 'Sedot WC', 'Rp 650.000', 'Layanan Sedot WC oke')"
            >
                <div class="card-body text-center">
                    <div class="icon mb-3">
                        <div style="width: 80px; height: 80px; background-color: #4e73df; border-radius: 50%; margin: 0 auto;">
                            <img src="{{ asset('template/img/sedot-wc.png') }}" alt="Sedot WC" style="width: 80px; height: 80px; border-radius: 50%;">
                        </div>
                    </div>
                    <h5 class="card-title text-primary">Sedot WC</h5>
                    <p class="card-text text-muted">Layanan Sedot WC oke</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div 
                class="card layanan-card shadow-lg mb-4" 
                data-click-count="0"
                style="border-radius: 15px; background-color: white; transition: transform 0.2s, background-color 0.2s;"
                onclick="toggleCardContent(this, 'Pelancaran', ' Rp 350.000', 'Pelancaran ter lancar')"
            >
                <div class="card-body text-center">
                    <div class="icon mb-3">
                        <div style="width: 80px; height: 80px; background-color: #4e73df; border-radius: 50%; margin: 0 auto;">
                            <img src="{{ asset('template/img/diesel.png') }}" alt="Sedot WC" style="width: 80px; height: 80px; border-radius: 50%;">
                        </div>
                    </div>
                    <h5 class="card-title text-primary">Pelancaran</h5>
                    <p class="card-text text-muted">Pelancaran ter lancar</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS -->
<style>
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        background: linear-gradient(to right, #3C3B8B, #222161);
    }

    .layanan-card:hover {
        transform: scale(1.05); /* Animasi memperbesar */
        background: #000; /* Warna saat hover menjadi hitam */
        cursor: pointer;
    }

    .layanan-card:hover .card-title {
        color: #fff; /* Warna judul menjadi putih saat hover */
    }

    .layanan-card:hover .card-text {
        color: #fff; /* Warna teks menjadi putih saat hover */
    }

    /* Gaya tambahan untuk kartu setelah diklik */
    .layanan-card.clicked {
        background: #EFEFEF; /* Warna abu muda seperti pada gambar */
        border: 2px solid #4E73DF; /* Bingkai biru */
        transition: transform 0.2s, background-color 0.3s; /* Animasi transisi */
    }

    .layanan-card.clicked .card-title {
        color: #3C3B8B; /* Warna teks menjadi biru gelap */
    }

    .layanan-card.clicked .card-text {
        color: #555555; /* Warna teks deskripsi abu-abu */
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

<!-- JavaScript -->
<script>
    function toggleCardContent(card, title, text1, text2, defaultText) {
        // Ambil jumlah klik dari atribut data
        let clickCount = parseInt(card.getAttribute('data-click-count'));

        // Tambahkan kelas 'clicked' untuk visual
        document.querySelectorAll('.layanan-card').forEach((c) => c.classList.remove('clicked'));
        card.classList.add('clicked');

        // Ubah konten berdasarkan jumlah klik
        const cardTitle = card.querySelector('.card-title');
        const cardText = card.querySelector('.card-text');

        if (clickCount === 0) {
            // Klik pertama: ubah menjadi detail layanan
            cardTitle.textContent = title;
            cardText.innerHTML = `<div>Layanan ${title}:<br>${text1}<br>${text2}</div>`;
        } else if (clickCount === 2) {
            // Klik ketiga: kembalikan ke konten awal
            cardTitle.textContent = title;
            cardText.textContent = defaultText;
        }

        // jumlah klik
        clickCount = (clickCount + 1) % 3; // Reset ke 0 setelah klik ke-3
        card.setAttribute('data-click-count', clickCount);
    }

    function updateHarga() {
        const jenisSelect = document.getElementById('jenis'); // Dropdown jenis layanan
        const hargaInput = document.getElementById('harga'); // Input harga

        // Ambil harga dari atribut data-harga
        const selectedOption = jenisSelect.options[jenisSelect.selectedIndex];
        const harga = selectedOption.getAttribute('data-harga');

        // Tampilkan harga (jika ada)
        hargaInput.value = harga ? parseInt(harga) : '';
    }
</script>
@endsection

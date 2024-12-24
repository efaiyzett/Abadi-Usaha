@extends('layouts.master')

@section('title', 'Kontak')

@section('content')
<style>
    /* Global styles for body and html */
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
        background: linear-gradient(to right, #3C3B8B, #222161); /* Background gradient */
        font-family: 'Poppins', sans-serif; /* Font untuk keseluruhan halaman */
    }

    /* Container styles for the content */
    .contact-container {
        color: white; /* Warna teks putih */
        padding: 50px 100px; /* Padding sesuai dengan desain */
        text-align: left;
        width: 100%; /* Lebar penuh */
        height: 100vh; /* Tinggi penuh dari viewport */
        display: flex;
        flex-direction: column;
        justify-content: center; /* Pusatkan konten secara vertikal */
        box-sizing: border-box;
    }

    /* Heading style */
    .contact-container h2 {
        font-size: 48px; /* Ukuran font judul */
        margin-bottom: 20px; /* Spasi bawah judul */
        font-weight: 700; /* Font tebal untuk heading */
        line-height: 1.2; /* Jarak antar baris heading */
    }

    /* Paragraph style */
    .contact-container p {
        font-size: 20px; /* Ukuran font teks biasa */
        margin: 10px 0; /* Spasi antar paragraf */
        font-weight: 400; /* Font normal untuk teks */
        line-height: 1.5; /* Jarak antar baris teks */
    }

    /* Styles for the contact and social media sections */
    .contact-info, .social-media {
        margin-top: 30px; /* Spasi antar bagian */
    }

    .contact-info strong, .social-media strong {
        font-size: 22px; /* Ukuran font untuk subjudul */
        font-weight: 600; /* Font sedikit lebih tebal */
    }

    /* Link style for social media */
    .social-media a, .contact-info a {
        font-size: 20px; /* Ukuran font untuk tautan */
        font-weight: 500; /* Font sedang */
        color: white;
        text-decoration: none;
    }

    .social-media a:hover, .contact-info a:hover {
        text-decoration: underline;
    }
</style>

<div class="contact-container">
    <h2>Butuh Konsultasi..?</h2>
    <p>Silahkan kontak kami</p>
    <p>Kami Siap Membantu</p>

    <div class="contact-info">
        <p><strong>Kontak</strong></p>
        <p>
            <a href="https://www.google.com/maps?q=Jl.+Imam+Bonjol+No.68+Kuwak+Kediri" target="_blank" style="color: white; text-decoration: none;">
                🏠 Jl. Imam Bonjol No.68 Kuwak Kediri
            </a>
        </p>
        <p>
            <a href="https://wa.me/6282142395050" target="_blank" style="color: white; text-decoration: none;">
                📞 0821-4239-5050
            </a>
        </p>
        <p>
            <a href="mailto:abadiusaha68@gmail.com" style="color: white; text-decoration: none;">
                📧 abadiusaha68@gmail.com
            </a>
        </p>
    </div>

    <div class="social-media">
    <p><strong>Social Media</strong></p>
    <p>
        <img src="{{ asset('template/img/ig.png') }}" alt="Instagram" 
             style="width: 24px; height: 24px; vertical-align: middle; margin-right: 8px;">
        <a href="https://instagram.com/abadiusaha68" target="_blank" style="color: white; text-decoration: none;">
            abadiusaha68
        </a>
    </p>
</div>
</div>
@endsection

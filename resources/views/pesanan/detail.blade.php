@extends('layouts.master')

@section('title', 'Detail Pemesanan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">📅 Detail Pemesanan</h2>

    <!-- Tombol Kembali -->
    <div class="mb-4">
        <a href="{{ url('tampil-pesanan') }}" class="btn btn-outline-secondary">
            ⬅️ Kembali ke Tabel Pemesanan
        </a>
    </div>

    <!-- Detail Pemesanan -->
    <div class="card">
        <div class="card-header bg-dark text-white">
            Informasi Detail Pemesanan
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Nama Pemesan:</strong> {{ $dataPesanan->nama }}
            </div>
            <div class="mb-3">
                <strong>Alamat:</strong> {{ $dataPesanan->alamat }}
            </div>
            <div class="mb-3">
                <strong>No HP:</strong> {{ $dataPesanan->no_hp }}
            </div>
            <div class="mb-3">
                <strong>Jenis Layanan:</strong> {{ $dataPesanan->Layanan->jenis }}
            </div>
            <div class="mb-3">
                <strong>Tanggal Pemesanan:</strong> {{ $dataPesanan->created_at->format('d-m-Y H:i') }}
            </div>
        </div>
    </div>
</div>
@endsection

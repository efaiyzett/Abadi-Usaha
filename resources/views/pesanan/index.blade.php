@extends('layouts.master')
@section('title', 'Tabel Pemesanan')
@section('content')

<br>
<div class="container">
    <h2 class="mb-4">📋 Tabel Pemesanan</h2>

    <!-- Tombol Navigasi -->
    <div class="mb-4 d-flex flex-wrap gap-2">
        <a href= 'beranda'  class="btn btn-outline-secondary">
            ⬅️ Kembali
        </a>
        <a href="{{ route('pesanan.excel') }}" class="btn btn-primary">
            📊 Export ke Excel
        </a>
        <a href="{{ route('pesanan.pdf') }}" class="btn btn-secondary" target="_blank">
            📄 Export ke PDF
        </a>
        <a href="{{ route('chart') }}" class="btn btn-dark">
            📈 Lihat Chart
        </a>
        <a href="export-laporan" class="btn btn-primary">
            💸 Laporan
        </a>
        <a href="tampil-pesanan-log" class="btn btn-danger">
            🔔({{ $hitung }})
        </a>

    </div>

    <!-- Tabel Pemesanan -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tabel-pesanan">
            <thead class="bg-dark text-white">
                <tr>
                    <th style="width: 5%">No.</th>
                    <th style="width: 5%">ID</th>
                    <th style="width: 15%">Nama</th>
                    <th style="width: 25%">Alamat</th>
                    <th style="width: 10%">No HP</th>
                    <th style="width: 15%">Jenis Layanan</th>
                    <th style="width: 10%">Harga</th>
                    <th style="width: 20%">Aksi</th>
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
                    <td>
                        <form action="{{ route('pesanan.delete', $data->id) }}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">
                            @csrf
                            <a href="{{ route('pesanan.detail', $data->id) }}" class="btn btn-info btn-sm"> 
                                📅
                            </a>
                            <a href="{{ route('pesanan.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                ✏️
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm">
                                🗑️
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

@extends('layouts.master')
@section('title', 'Form Pemesanan')

@section('content')
<div class="container mt-5">
    <div class="form-container bg-white p-4 shadow rounded-sm mx-auto" style="max-width: 500px;">
        <h2 class="text-center mb-4">Formulir Pemesanan</h2>
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulir -->
        <form action="{{ route('pesanan.store') }}" method="POST">
            @csrf

            <!-- Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{ old('alamat') }}</textarea>
            </div>

            <!-- Nomor HP -->
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor HP:</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ old('no_hp') }}" required>
            </div>

            <!-- Jenis Layanan -->
            <div class="mb-4">
                <label for="jenis" class="form-label">Jenis Layanan:</label>
                <select name="jenis" id="jenis" class="form-select" onchange="updateHarga()" required>
                    <option value="">Pilih Layanan</option>
                    @foreach ($jenis as $layanan)
                        <option value="{{ $layanan->id }}" data-harga="{{ $layanan->harga }}">{{ $layanan->jenis }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Harga -->
            <div class="mb-3">
                <label for="harga_display" class="form-label">Harga:</label>
                <!-- Input hanya untuk ditampilkan ke pengguna -->
                <input type="text" id="harga_display" class="form-control" readonly>
                <!-- Input hidden untuk nilai numerik yang akan dikirim ke server -->
                <input type="hidden" name="harga" id="harga">
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Pesan</button>
                <a href="/beranda" class="btn btn-success">Kembali</a>
            </div>
        </form>
    </div>
</div>

<script>
    function updateHarga() {
        const jenisSelect = document.getElementById('jenis');
        const hargaInput = document.getElementById('harga');
        const hargaDisplay = document.getElementById('harga_display');
        const selectedOption = jenisSelect.options[jenisSelect.selectedIndex];

        // Ambil harga dari atribut data-harga
        const harga = selectedOption.getAttribute('data-harga');

        // Perbarui nilai input harga_display untuk tampilan
        hargaDisplay.value = harga ? `Rp ${parseInt(harga).toLocaleString('id-ID')}` : '';

        // Perbarui nilai input hidden harga untuk database
        hargaInput.value = harga ? parseInt(harga) : '';
    }
</script>
@endsection

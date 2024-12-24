@extends('layouts.master')

@section('title', 'Edit Pemesanan')

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
    </style>
</head>
<div class="container mt-5">
    <div class="form-container bg-white p-4 rounded shadow-sm mx-auto" style="max-width: 500px;">
        <h2 class="text-center mb-4">Edit Pemesanan</h2>

        <!-- Tampilkan error jika ada -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form -->
        <form action="" method="POST">
            @csrf
            <!-- Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{$data->nama}}" required>
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <!-- <button type="button" class="btn btn-primary btn-sm mb-2">Pilih dengan Maps</button> -->
                <textarea name="alamat" id="alamat" class="form-control" rows="3" required>{{$data->alamat}}</textarea>
            </div>

            <!-- Nomor HP -->
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor HP:</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{$data->no_hp}}" required>
            </div>

            <!-- Jenis Layanan -->
            <div class="mb-4">
                <label for="jenis" class="form-label">Jenis Layanan:</label>
                <select name="jenis" id="jenis" class="form-select" value="{{  $data->jenis  }}" onchange="updateHarga()"  required>
                @foreach ($jen as $jenis)
                    <option value="{{ $jenis->id }}"
                            data-harga="{{ $jenis->harga }}"
                            {{ $jenis->id == $data->jenis ? 'selected' : '' }}>
                        {{ $jenis->jenis }}
                    </option>
                @endforeach
                </select>
            </div>

            <!-- harga -->
            <div class="mb-3">
                <label for="harga_display" class="form-label">Harga:</label>
                <!-- Input hanya untuk ditampilkan ke pengguna -->
                <input type="text" id="harga_display" class="form-control" readonly>
                <!-- Input hidden untuk nilai numerik yang akan dikirim ke server -->
                <input type="hidden" name="harga" id="harga">
            </div>

            <!-- Tombol -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Ubah</button>
                <a href="{{ url('tampil-pesanan') }}" class="btn btn-success">Kembali</a>
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

    // Panggil updateHarga saat halaman dimuat untuk menampilkan harga awal
    window.onload = updateHarga;
</script>
@endsection

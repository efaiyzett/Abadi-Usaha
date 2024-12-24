@extends('layouts.master')
@section('title', 'Notifikasi')
@section('content')
<br>
<div class="container">
    <h2 class="mb-4">📋 Log Pemesanan</h2>

    <!-- Tombol Navigasi -->
    <div class="mb-4 d-flex flex-wrap gap-2">
        <a href= 'tampil-pesanan'  class="btn btn-outline-secondary">
            ⬅️ Kembali
        </a>
    </div>

    <!-- Tabel Pemesanan log -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tabel-pesanan">
            <thead class="bg-dark text-white">
                <tr>
                    <th style="width: 5%">No.</th>
                    <th style="width: 5%">ID</th>
                    <th style="width: 15%">Order ID</th>
                    <th style="width: 10%">Nama</th>
                    <th style="width: 25%">KETERANGAN</th>
                    <th style="width: 15%">Jenis Layanan</th>
                    <th style="width: 10%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPesanan as $data_log)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data_log->id }}</td>
                    <td>{{ $data_log->order_id }}</td>
                    <td>{{ $data_log->nama }}</td>
                    <td>{{ $data_log->keterangan }}</td>
                    <td>{{ $data_log->jenis }}</td>
                    <td>
                        <form action="{{ route('pesanan.delete_log', $data_log->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">
                                SUDAH DIBACA
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
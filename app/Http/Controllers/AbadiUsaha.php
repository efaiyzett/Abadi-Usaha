<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Pesanan_log;
use App\Models\Layanan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PesananExport;
use App\Exports\LaporanExport;
use Illuminate\Support\Facades\DB;

class AbadiUsaha extends Controller
{
    

    public function beranda(){
        return view('beranda');
    }

    public function layanan(){
        return view('layanan');
    }

    public function tentang(){
        return view('tentang');
    }

    public function kontak(){
        return view('kontak');
    }

    public function index(){
        $data = Pesanan::all();
        $hitung = Pesanan_log::count();
            return view('pesanan.index', ['dataPesanan' => $data, 'hitung' => $hitung]);
    }

    public function create(){
        $jenis = Layanan::all();
        return view('pesanan.create', compact('jenis'));
    }

    public function store(Request $request){

        $message = [
            'required' => ':attribute tidak boleh kosong',
            'numeric' => ':attribute harus berupa angka',
        ];
        
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
        ], $message);

        $data = new Pesanan();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jenis = $request->jenis;
        $data->harga = $request->harga;
        $data->save();
        return redirect('/beranda')->with('success', 'Data Berhasil Dipesan');
    }

    public function edit($id){
        $data = Pesanan::find($id);
        $jenis = Layanan::all();
        return view('pesanan.edit', ['data' => $data, 'jen' => $jenis]);
    }

    public function update(Request $request, $id){
        $data = Pesanan::find($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->jenis = $request->jenis;
        $data->harga = $request->harga;
        $data->update();
        return redirect('/tampil-pesanan')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id){
        $data = Pesanan::find($id);
        $data->delete();
        return redirect('/tampil-pesanan')->with('success', 'Data Berhasil Dihapus');
    }

    public function excel(){
        return Excel::download(new PesananExport, 'pesanan.xlsx');
    }

    public function pdf(){
        $data = Pesanan::all();
        return view('pesanan.pdf', ['dataPesanan'=>$data]);
    }

    public function chart()
    {
        $labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Query untuk Layanan A (jenis = 1)
        $layananA = DB::table('pesanan')
            ->selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->where('jenis', 1)
            ->groupBy('bulan')
            ->pluck('total', 'bulan');

        // Query untuk Layanan B (jenis = 2)
        $layananB = DB::table('pesanan')
            ->selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->where('jenis', 2)
            ->groupBy('bulan')
            ->pluck('total', 'bulan');

        // Mengisi jumlah pesanan berdasarkan bulan, jika tidak ada data maka isi dengan 0
        $layananAData = [];
        $layananBData = [];

        foreach (range(1, 12) as $bulan) {
            $layananAData[] = $layananA->get($bulan, 0); // Jika bulan tidak ditemukan, gunakan 0
            $layananBData[] = $layananB->get($bulan, 0);
        }

        return view('pesanan.chart', compact('labels', 'layananAData', 'layananBData'));
    }

    public function showloginform()
    {
        return view('auth.login');
    }

    public function detail($id) {
        $dataPesanan = Pesanan::findOrFail($id);
        return view('pesanan.detail', compact('dataPesanan'));
    }

    public function laporan()
    {
        return Excel::download(new LaporanExport, 'laporan_bulanan.xlsx');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function pesanan_log(){
        $data_log = Pesanan_log::all();
            return view('pesanan.notifikasi', ['dataPesanan' => $data_log]);
    }

    public function delete_log($id){
        $data_log = Pesanan_log::find($id);
        $data_log->delete();
        return redirect('/tampil-pesanan-log')->with('success', 'Data Berhasil Dihapus');
    }

}

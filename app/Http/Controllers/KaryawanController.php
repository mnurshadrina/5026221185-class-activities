<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // Halaman Index untuk melihat seluruh record di tabel "karyawan"
    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate(10); // Paginasi 10 data per halaman
        return view('karyawan', ['karyawan' => $karyawan]);
    }

    // Menampilkan halaman Tambah Data
    public function create()
    {
        return view('tambahKaryawan');
    }

    // Menyimpan record baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|size:5|unique:karyawan,kodepegawai',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|size:5',
            'departemen' => 'required|integer',
        ]);

        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => strtoupper($request->namalengkap),
            'divisi' => $request->divisi,
            'departemen' => strtolower($request->departemen),
        ]);

        return redirect('/karyawan')->with('success', 'Data karyawan berhasil ditambahkan');
    }

    // Menampilkan form Edit Data
    public function edit($kodepegawai)
    {
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();
        return view('editKaryawan', ['karyawan' => $karyawan]);
    }

    // Menyimpan perubahan data
    public function update(Request $request, $kodepegawai)
    {
        $request->validate([
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|size:5',
            'departemen' => 'required|integer',
        ]);

        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->update([
            'namalengkap' => strtoupper($request->namalengkap),
            'divisi' => $request->divisi,
            'departemen' => strtolower($request->departemen),
        ]);

        return redirect('/karyawan')->with('success', 'Data karyawan berhasil diperbarui');
    }

    // Fungsi menghapus record dari database
    public function destroy($kodepegawai)
    {
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();
        return redirect('/karyawan')->with('success', 'Data karyawan berhasil dihapus');
    }
}

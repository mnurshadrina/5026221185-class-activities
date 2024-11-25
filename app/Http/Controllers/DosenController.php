<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }

    public function blog(){
    	return view('blog');
    }

    public function biodata(){
        $nama = "Aulia Hanifah";
        $umur = 21;
        $hasil_kali = 21 * 10;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

    	return view('biodata',[
            'nama' => $nama,
            'umur' => $umur,
            'hasil_kali' => $hasil_kali,
            'matkul' => $pelajaran]);

    }
}

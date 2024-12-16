<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KopiController extends Controller
{
	public function index(Request $request){
        $kopi = DB::table('kopi')->paginate(20);
		return view('kopi',['kopi' => $kopi]);
    }

    public function search(Request $request){
        $search = $request->search;
        $pagination = $request->query('pagination',20);
        if($search == null){
            $kopi = DB::table('kopi')->paginate($pagination);
        }else{
            $kopi = DB::table('kopi')
            ->where('merkkopi','like',"%".$search."%")
            ->paginate($pagination);
        }

    return view('kopi',['kopi' => $kopi]);
    }

    public function add(){

	return view('tambahKopi');
    }

    public function store (Request $request) {
        DB::table('kopi')->insert([
            'merkkopi' => $request->merkkopi,
            'stockkopi' => $request->stockkopi,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/kopi');

    }

    public function edit($kodekopi) {
        $kopi = DB::table('kopi')->where('kodekopi', $kodekopi)->get();
    return view('editKopi',['kopi' => $kopi]);
    }

    public function update(Request $request){
        DB::table('kopi')->where('kodekopi',$request->kodekopi)->update([
            'merkkopi' => $request->merkkopi,
            'stockkopi' => $request->stockkopi,
            'tersedia' => $request->tersedia
        ]);
    return redirect('/kopi');
    }
    public function delete($kodekopi){
        DB::table('kopi')->where('kodekopi',$kodekopi)->delete();

    return redirect('/kopi');
    }
}

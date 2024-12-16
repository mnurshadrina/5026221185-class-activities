@extends('template')

@section('test1', 'Tambah Data Kopi')

@section('link1')
<a href="/kopi"> Kembali</a>
@endsection

@section('konten')
	<form action="/kopi/store" method="POST">
		{{ csrf_field() }}

        <div class="form-group row mb-3">
            <label for="merkkopi" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="merkkopi" class="form-control" id="merkkopi" required="required" placeholder="Isi nama">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="stockkopi" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input type="number" name="stockkopi" class="form-control" id="stockkopi" required="required" placeholder="Isi Jumlah">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10 d-flex align-items-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersediaY" value="Y">
                    <label class="form-check-label" for="tersediaY">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersediaN" value="N">
                    <label class="form-check-label" for="tersediaN">Tidak</label>
                </div>
            </div>
        </div>
        <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
	</form>
@endsection

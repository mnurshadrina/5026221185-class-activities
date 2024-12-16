@extends('template')

@section('test1', 'Edit Data Kopi')

@section('link1')
<a href="/kopi"> Kembali</a>
@endsection

@section('konten')
	@foreach($kopi as $b)
	<form action="/kopi/update" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="kodekopi" id="kodekopi" value="{{ $b-> kodekopi}}">

		<div class="form-group row mb-3">
            <label for="merkkopi" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="merkkopi" class="form-control" id="merkkopi" required="required" value="{{ $b-> merkkopi}}">
            </div>
          </div>
        <div class="form-group row mb-3">
            <label for="stockkopi" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input type="number" name="stockkopi" class="form-control" id="stockkopi" required="required" value="{{ $b-> stockkopi}}">
            </div>
          </div>
          <div class="form-group row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10 d-flex align-items-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersediaY" value="Y" {{ $b-> tersedia == 'Y' ? 'checked' : ''}}>
                    <label class="form-check-label" for="tersediaY">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersediaN" value="N" {{ $b-> tersedia == 'N' ? 'checked' : ''}}>
                    <label class="form-check-label" for="tersediaN">Tidak</label>
                </div>
            </div>
        </div>
        <center><button type="submit" class="btn btn-primary mt-2">Update Data</button></center>
	</form>
	@endforeach
@endsection

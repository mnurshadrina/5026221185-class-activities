@extends('template')

@section('test1', 'Edit Data Karyawan')

@section('konten')
    <form action="/karyawan/{{ $karyawan->kodepegawai }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group row mb-3">
            <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" name="kodepegawai" class="form-control" id="kodepegawai"
                       value="{{ $karyawan->kodepegawai }}" readonly>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="namalengkap" class="form-control" id="namalengkap"
                       value="{{ $karyawan->namalengkap }}" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" name="divisi" class="form-control" id="divisi"
                       value="{{ $karyawan->divisi }}" required>
            </div>
        </div>

        <div class="form-group row mb-3">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="number" name="departemen" class="form-control" id="departemen"
                       value="{{ $karyawan->departemen }}" required>
            </div>
        </div>

        <center>
            <button type="submit" class="btn btn-primary mt-2">Update Data</button>
        </center>
    </form>
@endsection

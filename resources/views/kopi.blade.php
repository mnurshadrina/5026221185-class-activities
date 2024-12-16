@extends('template')

@section('test1', 'Kopi')

@section('link1')
    <a href="/kopi/add" class="btn btn-primary"> + Tambah Kopi Baru</a>
@endsection

@section('konten')
	<form action="/kopi/search" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label"><nav></nav>Cari Kopi</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Kopi .." value="{{ request('search') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
          </div>

	</form>
    </br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach($kopi as $b)
        <tr>
            <td>{{ $b->kodekopi }}</td>
            <td>{{ $b->merkkopi }}</td>
            <td>{{ $b->stockkopi }}</td>
            <td>
                @if ($b->tersedia === 'Y')
                <i class="fa-solid fa-check text-success"></i>
                @else
                <i class="fa-solid fa-minus text-danger"></i>
                @endif
            </td>
            <td class="text-left">
                <a href="/kopi/edit/{{ $b->kodekopi }}" class="btn btn-warning btn-icon">Edit</a>
                <a href="/kopi/delete/{{ $b->kodekopi }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
	Halaman : {{ $kopi->currentPage() }} <br/>
	Jumlah Data : {{ $kopi->total() }} <br/>
	Data Per Halaman : {{ $kopi->perPage() }} <br/>

	{{ $kopi->links() }}

@endsection

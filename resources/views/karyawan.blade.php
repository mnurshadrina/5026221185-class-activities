@extends('template')

@section('test1', 'Data Karyawan')

@section('link1')
    <a href="/karyawan/create" class="btn btn-primary">+ Tambah Data</a>
@endsection

@section('konten')
    <br>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
            </tr>
        </thead>
        <tbody>
        @foreach($karyawan as $data)
            <tr>
                <td>{{ $data->kodepegawai }}</td>
                <td>{{ strtoupper($data->namalengkap) }}</td>
                <td>{{ $data->divisi }}</td>
                <td>{{ strtolower($data->departemen) }}</td>
                <td>
                    <form action="/karyawan/{{ $data->kodepegawai }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <!-- Paginasi -->
    @if($karyawan instanceof \Illuminate\Pagination\LengthAwarePaginator)
        Halaman : {{ $karyawan->currentPage() }} <br>
        Jumlah Data : {{ $karyawan->total() }} <br>
        Data Per Halaman : {{ $karyawan->perPage() }} <br>
        <br>
        {{ $karyawan->links() }}
    @endif
@endsection

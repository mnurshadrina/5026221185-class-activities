@extends('template')

@section('test1', 'Data Keranjang Belanja')

@section('link1')
    <a href="/cart/add" class="btn btn-primary"> + Tambah Keranjang Baru</a>
@endsection

@section('konten')
	<form action="/cart/search" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Keranjang</label>
            <div class="col-sm-6">
                <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Keranjang .." value="{{ request('cari') }}">
            </div>
           d <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
            </div>
        </div>
	</form>
    <br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach($keranjangbelanja as $cart)
        <tr>
            <td>{{ $cart->ID }}</td>
            <td>{{ $cart->KodeBarang }}</td>
            <td>{{ $cart->Jumlah }}</td>
            <td>{{ $cart->Harga }}</td>
            <td>
                <!-- Calculate Total in PHP (cleaner approach) -->
                {{ number_format($cart->Jumlah * $cart->Harga, 2) }}
            </td>
            <td class="text-left">
                <a href="/cart/edit/{{ $cart->ID }}" class="btn btn-info btn-icon">Beli</a>
                <a href="/cart/delete/{{ $cart->ID }}" class="btn btn-danger">Batal</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    Halaman : {{ $keranjangbelanja->currentPage() }} <br/>
    Jumlah Data : {{ $keranjangbelanja->total() }} <br/>
    Data Per Halaman : {{ $keranjangbelanja->perPage() }} <br/>

    {{ $keranjangbelanja->links() }}
@endsection

@extends('dashboard.layouts.main')



@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Order Barang</h1>
  </div>
  <div class="col-lg-8">
    @if(session()->has('success'))
    <div class="alert alert-primary" role="alert">
        Pesanan telah tersimpan
    </div>
    @endif
    <form onsubmit="return validform()" action="/dashboard/dashboardbarang" method="post">
        @csrf
        <div class="mb-3">
          <label for="tgl_pesan" class="form-label">tanggal pesan</label>
          <input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan">
          @error('tgl_pesan')
          <p class="text-red-500 text-xs italic mt-4">
              {{ $message }}
          </p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="produk" class="form-label">Barang</label>
          <select class="form-select" name="id_produk">
                <option selected>Open this select menu</option>
                @foreach ( $produks as $produk )
                    <option Value="{{ $produk->id }}">{{ $produk->nama_produk }}</option>
                @endforeach
          </select>
          @error('id_produk')
          <p class="text-red-500 text-xs italic mt-4">
              {{ $message }}
          </p>
          @enderror
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">jumlah</label>
            <input type="integer" class="form-control" id="jumlah"  name="jumlah">
            @error('jumlah')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
 
@endsection
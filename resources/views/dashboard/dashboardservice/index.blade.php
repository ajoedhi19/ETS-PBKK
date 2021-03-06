@extends('dashboard.layouts.main')



@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Order Layanan</h1>
  </div>
  <div class="col-lg-8">
    <form onsubmit="return validform()" action="/dashboard/dashboardservice" method="post">
        @csrf
        <div class="mb-3">
          <label for="tgl_pesan" class="form-label">tanggal pesan</label>
          <input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan">
        </div>
        <div class="mb-3">
          <label for="layanan" class="form-label">Layanan</label>
          <select class="form-select" name="id_layanan">
                <option selected>Open this select menu</option>
                @foreach ( $services as $service )
                    <option Value="{{ $service->id }}">{{ $service->nama_layanan }}</option>
                @endforeach
                @error('id_service')
          <p class="text-red-500 text-xs italic mt-4">
              {{ $message }}
          </p>
          @enderror
                
          </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">jumlah</label>
            <input type="integer" class="form-control" id="jumlah"  name="jumlah">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
 
@endsection
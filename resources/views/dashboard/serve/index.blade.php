@extends('dashboard.layouts.main')



@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Barang</h1>
  </div>
  <div class="col-lg-8">
    <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">nama</th>
              <th scope="col">jumlah</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($services as $service)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $service->nama_service }}</td>
                <td>{{ $service->harga }}</td>
                <td><a href="/dashboard/serve/{{ $service->id }}"><i class="bi bi-eye-fill"></i></a></td>
                <td><a ><i class="bi bi-pencil-fill"></i></a></td>
                <td>
                <form action="/dashboard/serve{{ $service->id }}" method="post">
                    @method("delete")
                    @csrf
                    <button class="badge bg-danger" onclick="return confirm('Are you SUre?')"><i class="bi bi-eraser-fill"></i></button>
                </form>
                </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>
      </div>
    
  </div>
 
@endsection
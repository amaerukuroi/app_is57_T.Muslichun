@extends('layouts.admin')

@section('navpem', 'active')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pemesanan </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Pemesanan </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Pemesanan</h1> --}}
    <a href="/pemesanan/form" class="btn btn-primary">Tambah Data</a>
    <br>
    <br>
    <div class="card bg-white mt-3 p-4">
        <div class="card-header">
            Data Pemesanan
        </div>
        <div class="card-body">
          <table id="example2" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NO PEMESANAN</th>
                    <th scope="col">UNIT MOBIL</th>
                    <th scope="col">LAYANAN</th>
                    <th scope="col">JADWAL</th>
                    <th scope="col">TARIF</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pem as $item)
                        <tr>
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{$item->no_pemesanan}}</td>
                            <td>{{$item->mobils->umobil}}</td>
                            <td>{{$item->layanans->jenis_layanan}}</td>
                            <td>{{$item->jadwal}}</td>
                            <td>{{$item->layanans->tarif}}</td>
                            <td>
                                <a href="/pemesanan/edit/{{$item->id}}" class="btn btn-success btn-sm">Edit</a>
                                
                                  
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#a{{$item->id}}">
                                  Hapus
                              </button>
<div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Yakin Data {{$item->no_pemesanan}} ingin dihapus...?
    </div>
       <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
      <form method="POST" action="/pemesanan/{{$item->id}}">
      @csrf
       @method ('DELETE')
          
      <button type="submit" class="btn btn-primary ">Hapus</button>
</form>
    </div>
  </div>
</div>
</div>

                          </td>
                          
                      </tr>
                  @empty
                      <tr>
                          <td colspan="4">Belum Ada Data</td>
                      </tr>
                  @endforelse
                  
              </tbody>
          </table>
      </div>
  </div>
</div>
</div>
@endsection
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
    
    <div class="card bg-white mt-3 p-4">
        <div class="card-header">
            Form Pemesanan
        </div>
        <div class="card-body">
            <form method="post" action="/pemesanan/store">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NO PEMESANAN</label>
                    <input type="text" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Unit Mobil</label>
                    <select name="mobil" class="form-control">
                        <option value="">-Pilih UnitMobil-</option>
                        @foreach ($mo as $item)
                            <option value="{{$item->id}}">{{$item->umobil}}</option>  
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">LAYANAN</label>
                    <select name="layanan" class="form-control">
                        <option value="">-Pilih Layanan-</option>
                        @foreach ($lay as $item)
                            <option value="{{$item->id}}">{{$item->jenis_layanan}}</option>  
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">JADWAL</label>
                    <input type="date" name="jadwal" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" name="jadwal" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/pemesanan" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>

</div>

@endsection
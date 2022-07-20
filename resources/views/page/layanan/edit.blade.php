@extends('layouts.admin')

@section('title', 'Edit Data Layanan')
@section('navlay', 'active')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Layanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Layanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>




<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data layanan</h1> --}}
    
    <div class="card bg-white mt-3 p-4">
      <div class="card-header">
          Edit Layanan
      </div>
      <div class="card-body">
            <form method="post" action="/layanan/{{$lay->id}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Layanan</label>
                    <input type="text" value="{{$lay->jenis_layanan}}" name="jenis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tarif</label>
                    <input type="text" value="{{$lay->tarif}}" name="tarif" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/layanan" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>

</div>
@endsection
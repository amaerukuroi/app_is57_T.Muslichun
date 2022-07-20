@extends('layouts.admin')


@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Unit Mobil</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Unit Mobil</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Pekerja</h1> --}}
    
    <div class="card bg-white mt-3 p-4">
      <div class="card-header">
          Form Unit  Mobil
      </div>
      <div class="card-body">
            <form method="post" action="/umobil/store">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Unit Mobil</label>
                    <input type="text" name="mobil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
               
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/umobil" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@extends('layouts.admin')

@section('title', 'Tambah Data layanan')
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
              <li class="breadcrumb-item"><a href="/">Home</a></li>
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
          Form Layanan
      </div>
      <div class="card-body">
            <form method="post" action="/layanan/store">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis layanan</label>
                    <input type="text" name="jenis" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Tarif</label>
                  <input type="text" name="tarif" class="form-control">
              </div>
              
                <button type="submit" class="btn btn-primary">Tambah Data</button>
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
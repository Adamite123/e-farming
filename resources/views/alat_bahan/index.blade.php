@extends('layouts.app')

@section('title', 'Kelola Alat dan Bahan')
@section('content')

  <!-- Sub Header START -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Alat dan Bahan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kelola Alat dan Bahan</li>
    </ol>
  </div>
  <!-- Sub Header END -->

  <!-- Daftar Alat START -->
  <div class="row mb-3">
    <div class="col-xl-12 col-lg-12 mb-4">
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Daftar Alat dan Bahan</h6>
          <a class="m-0 float-right btn btn-primary btn-sm" href="{{ route('alatb.create') }}">Tambah Alat dan Bahan <i class="fas fa-plus"></i>
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table align-items-center table-flush" id="datatableid">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Nama Bahan / Alat</th>
                  <th>Satuan</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                  <td>id</td>
                  <td>Nama Bahan / Alat</td>
                  <td>Satuan</td>
                  <td>Kategori</td>
                  <td>
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="" class="btn btn-sm btn-primary" title="Detail"> <i class="fas fa-eye"></i> </a>
                      </div>
                      
                      <div class="col-sm-6">

                        <form action="" method="POST">
                          @csrf
                          
                          <button type="submit" class="btn btn-sm btn-danger" title="Hapus"> <i class="fas fa-trash"></i> </button>
                        </form>

                      </div>
                    </div>
                  </td>
                </tr>                  
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Daftar Alat END -->


@endsection
@extends('layout')
@section('container')

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row justify-content-center"> <!-- Menengahkan konten -->
        <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Tambah Data Anggota</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
              <form action="storeanggota" method="POST">
                {{ csrf_field() }}
                <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                  <label for="nama_anggota" class="form-label">Nama Anggota</label>
                  <input type="text" class="form-control" id="nama_anggota" name="nama_anggota">
                </div>
                <div class="mb-3">
                  <label for="no_anggota" class="form-label">No Anggota</label>
                  <input type="number" class="form-control" id="no_anggota" name="no_anggota">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
        
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

@endsection
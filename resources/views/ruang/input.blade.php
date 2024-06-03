@extends('layout')
@section('container')
 
  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row justify-content-center"> <!-- Menengahkan konten -->
        <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Tambah Ruang</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
              <form action="storeruang" method="POST">
                {{ csrf_field() }}
                <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                  <label for="nama_ruang" class="form-label">Nama Ruang</label>
                  <input type="text" class="form-control" id="nama_ruang" name="nama_ruang">
                </div>
                <div class="mb-3">
                  <label for="kode_ruang" class="form-label">Kode Ruang</label>
                  <input type="text" class="form-control" id="kode_ruang" name="kode_ruang">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
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
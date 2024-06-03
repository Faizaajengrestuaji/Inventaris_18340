@extends('layout')
@section('container')
 
  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row justify-content-center"> <!-- Menengahkan konten -->
        <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Tambah Data Petugas</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
                @foreach($petugas as $d)
                <form action="/petugas/updatepetugas" method="post">
                    @csrf
                    <input type="hidden" name="id_petugas" value="{{ $d->id_petugas }}">
                <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                  <label for="nama_petugas" class="form-label">Nama Petugas</label>
                  <input type="text" class="form-control" name="nama_petugas" value="{{ $d->nama_petugas }}">
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" value="{{ $d->username }}">
                </div>
                <div class="mb-3">
                  <label for="nama_level" class="form-label">Level</label>
                  <select name="id_level" class="form-control"value="{{ $d->id_level }}" >
                     <option value="">-- Pilih Level --</option>
                     @foreach ($detail_level as $item)
                     <option value="{{ $item['id_level'] }}">{{ $item['nama_level'] }}</option>
                     @endforeach
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

@endsection
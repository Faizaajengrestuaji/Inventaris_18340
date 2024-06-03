@extends('layout')
@section('container')

 <!-- Main content -->
 <div class="content mt-5">
  <div class="container">
    <div class="row justify-content-center"> <!-- Menengahkan konten -->
      <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Data Anggota</h5> <!-- Mengurangi ukuran judul -->
            <a href="createanggota"><i class="fa-solid fa-user-plus"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>No Anggota</th>
                    <th>Alamat</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $d)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama_anggota }}</td>
                    <td>{{ $d->no_anggota }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>
                      <a href="/anggota/editanggota/{{ $d->id_anggota }}"><i class="fa-solid fa-user-pen"></i></a>
                      <a href="/anggota{{ $d->id_anggota }}"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
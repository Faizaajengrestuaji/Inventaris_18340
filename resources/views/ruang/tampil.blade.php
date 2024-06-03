@extends('layout')
@section('container')

 <!-- Main content -->
 <div class="content mt-5">
  <div class="container">
    <div class="row justify-content-center"> <!-- Menengahkan konten -->
      <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Ruang</h5> <!-- Mengurangi ukuran judul -->
            <a href="createruang"><i class="fa-solid fa-user-plus"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Ruang</th>
                    <th>Kode Ruang</th>
                    <th>Keterangan</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $d)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama_ruang }}</td>
                    <td>{{ $d->kode_ruang }}</td>
                    <td>{{ $d->keterangan }}</td>
                    <td>
                      <a href="/editruang{{ $d->id_ruang }}"><i class="fa-solid fa-user-pen"></i></a>
                      <a href="/ruang{{ $d->id_ruang }}"><i class="fa-regular fa-trash-can"></i></a>
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
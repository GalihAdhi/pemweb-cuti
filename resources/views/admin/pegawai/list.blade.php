@extends('layouts.admin')

@section('title', 'List Pegawai')

@section('content')
<nav class="navbar navbar-expand">
    <div class="container-fluid navbar-brand">LIST PEGAWAI</div>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</nav>
<div class="container table-responsive">
    <table class="table table-striped">
      <thead class="table-dark text-center">
          <th>NAMA</th>
          <th>NIK</th>
          <th>JENIS KELAMIN</th>
          <th>ALAMAT</th>
          <th>TINDAKAN</th>
      </thead>
      <tbody class="text-center">
            <tr>
                <td>John Doe</td>
                <td>33110987654321</td>
                <td>L</td>
                <td>New York</td>
                <td>
                    <i class="bi bi-trash btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#hapus-member"></i>
                    <i class="bi bi-pencil btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#edit-member"></i>
                </td>
            </tr>
            <tr>
                <td>Jane Doe</td>
                <td>33111234567890</td>
                <td>P</td>
                <td>Pennsylvania</td>
                <td>
                    <i class="bi bi-trash btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#hapus-member"></i>
                    <i class="bi bi-pencil btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#edit-member"></i>
                </td>
            </tr>
      </tbody>
    </table>
</div>

<div class="modal fade" id="hapus-member" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kick Pegawai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          YAKIN???
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">YAKIN BOSS</button>
        </div>
      </div>
    </div>
</div>

  <div class="modal fade" id="edit-member" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3 align-middle">
                <div class="form-floating col-12 mb-1" style="margin-top: 5px;">
                    <input type="text" class="form-control" id="nama" placeholder="NAMA">
                    <label for="nama">Nama</label>
                </div>
                    <div class="form-floating col-md-4 mb-1">
                        <input type="text" class="form-control" id="nik" placeholder="NIK">
                        <label for="nik">NIK</label>
                    </div>
                    <div class="form-floating col-md-4 mb-1">
                        <select class="form-select" id="jkelamin" aria-label="JenisKelamin">
                          <option selected>-</option>
                          <option value="1">Laki-Laki</option>
                          <option value="2">Perempuan</option>
                        </select>
                        <label for="floatingSelect">Jenis Kelamin</label>
                      </div>
                <div class="form-floating col-12 mb-1">
                    <input type="text" class="form-control" id="alamat" placeholder="ALAMAT">
                    <label for="alamat">Alamat</label>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection

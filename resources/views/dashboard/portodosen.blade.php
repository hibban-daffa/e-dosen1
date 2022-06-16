@extends('dashboard.layouts.main1')

@section('container')
<main>
  <div class="container-fluid px-4">
    <h1 class="mt-3">Form Portofolio</h1>
    <hr class="mt-2 mb-4">
    <div class="col-lg-8 mb-5">
<form>
    <!-- Pendidikan -->
  <div class="mb-3">
    <h5 class="mb-1">Riwayat Pendidikan</h5>
    <div class="row mb-2">
        <div class="col-10">
            <label for="InputNama" class="form-label">Universitas (1)</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="col">
            <label for="InputNama" class="form-label">Jenjang</label>
            <select class="form-select" aria-label="Default select example">
            <option value="1">S1</option>
            <option value="2">S2</option>
            <option value="3">S3</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="InputNama" class="form-label">Program Studi</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="col">
            <label for="InputNama" class="form-label">Tahun Lulus</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
        </div>
    </div>
    <div class="row row-cols-auto">
        <div class="col">
        <a class="nav-link" href="">
            <i class="fas fa-plus" style="height: 30px; weight: 30px; color:grey"></i>        
          </a>
        </div>
        <div class="col">
          <a class="nav-link" href="">
            <i class="fas fa-minus" style="height: 30px; weight: 30px; color:grey"></i>        
          </a>
        </div>
    </div>
  </div>

  <!-- Keahlian -->
  <div class="mb-3">
    <h5 class="mb-1">Bidang Keahlian</h5>
    <label for="InputDeskripsi" class="form-label">Bidang Keahlian</label>
    <input class="form-control" id="deskripsi" rows="3"></input>
  </div>

  <!-- Proyek Penelitian -->
  <div class="mb-3">
    <h5 class="mb-1">Proyek Penelitian</h5>
    <label for="InputDeskripsi" class="form-label">Judul (1)</label>
    <input class="form-control mb-2" id="deskripsi" rows="3"></input>
    <div class="row">
        <div class="col-10">
            <label for="InputNama" class="form-label">Jenis Penelitian</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="col">
            <label for="InputNama" class="form-label">Tahun</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
        </div>
    </div>
    <div class="row row-cols-auto">
        <div class="col">
        <a class="nav-link" href="">
            <i class="fas fa-plus" style="height: 30px; weight: 30px; color:grey"></i>        
          </a>
        </div>
        <div class="col">
          <a class="nav-link" href="">
            <i class="fas fa-minus" style="height: 30px; weight: 30px; color:grey"></i>        
          </a>
        </div>
    </div>
  </div>

<!-- Publikasi -->

<div class="mb-3">
    <h5 class="mb-1">Proyek Penelitian</h5>
    <div>
      <label for="fakultas" class="form-label">Judul (1)</label>
      <input type="text" class="form-control" id="fakultas">
    </div>
    <div>
      <label for="fakultas" class="form-label">Penulis</label>
      <input type="text" class="form-control" id="fakultas">
    </div>
    <div class="row">
        <div class="col-10">
            <label for="InputNama" class="form-label">Link Publikasi</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="col">
            <label for="InputNama" class="form-label">Tahun</label>
            <input type="text" class="form-control" id="exampleInputEmail1">
        </div>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Upload Dokumen</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <div class="row row-cols-auto">
        <div class="col">
        <a class="nav-link" href="">
            <i class="fas fa-plus" style="height: 30px; weight: 30px; color:grey"></i>        
          </a>
        </div>
        <div class="col">
          <a class="nav-link" href="">
            <i class="fas fa-minus" style="height: 30px; weight: 30px; color:grey"></i>        
          </a>
        </div>
    </div>
  </div>

<!-- Supervision -->
  <div class="mb-3">
    <h5 class="mb-1">Kepangkatan</h5>
    <div class="row">
          <div class="col">
              <label for="InputNama" class="form-label">Jabatan</label>
              <input type="text" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="col">
              <label for="InputNama" class="form-label">Pangkat</label>
              <input type="text" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="col-2">
              <label for="InputNama" class="form-label">Poin Saat Ini</label>
              <input type="text" class="form-control" id="exampleInputEmail1">
          </div>
      </div>
  </div>

<!-- Pengalaman -->
  <div class="mb-3">
    <h5 class="mb-1">Proyek Penelitian</h5>
    <div class="row">
      <div class="col-6">
          <label for="InputNama" class="form-label">Tempat Pengabdian (1)</label>
          <input type="text" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="col">
          <label for="InputNama" class="form-label">Tahun</label>
          <input type="text" class="form-control" id="exampleInputEmail1">
      </div>
    </div>
    <div>
      <label for="fakultas" class="form-label">Jabatan</label>
      <input type="text" class="form-control" id="fakultas">
    </div>
    <div>
      <label for="fakultas" class="form-label">Deskripsi</label>
      <textarea class="form-control" id="deskripsi" rows="3"></textarea>
    </div>
    <div class="row row-cols-auto">
        <div class="col">
        <a class="nav-link" href="">
            <i class="fas fa-plus" style="height: 30px; weight: 30px; color:grey"></i>        
          </a>
        </div>
        <div class="col">
          <a class="nav-link" href="">
            <i class="fas fa-minus" style="height: 30px; weight: 30px; color:grey"></i>        
          </a>
        </div>
    </div>
  </div>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Simpan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Simpan Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Data yang telah diisi sudah benar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <a type="button" href="/listdosen" class="btn btn-primary">Simpan</a>
      </div>
    </div>
  </div>
</div>
</form>
</div>
  </div>
</main>
<footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; E-Dosen</div>
            </div>
          </div>
        </footer>
          
@endsection
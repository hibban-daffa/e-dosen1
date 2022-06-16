@extends('dashboard.layouts.main2')

@section('container')

<main>
          <div class="container-fluid px-4">
            <h1 class="mt-3">Daftar Post</h1>
            <hr class="mt-2 mb-4">
            <div class="col-lg-8 mb-5">
              <form class="GET">
                <div class="mb-3">
                  <label for="InputNama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                  <label for="InputDeskripsi" class="form-label">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label">Foto</label>
                  <div>
                  <img id="frame" src="/img/foto.svg" class="img-fluid" style="max-width: 300px"/>
                    <div class="input-group mt-3">
                        <input type="file" class="form-control" id="foto" onchange="preview()">
                        <button class="btn btn-outline-secondary" type="button" id="hapus" onclick="clearImage()">Hapus</button>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="universitas" class="form-label">Universitas</label>
                  <input type="text" class="form-control" id="universitas">
                </div>
                <div class="mb-3">
                  <label for="fakultas" class="form-label">Fakultas</label>
                  <input type="text" class="form-control" id="fakultas">
                </div>
                <div class="mb-3">
                  <label for="prodi" class="form-label">Program Studi</label>
                  <input type="text" class="form-control" id="prodi">
                </div>
                <h5>Sosial Media</h5>
                <label for="basic-url" class="form-label">Linkedin</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon3">www.linkedin.comvin/</span>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="basic-url" class="form-label">Instagram</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon3">www.instagram.com/</span>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="basic-url" class="form-label">Twitter</label>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon3">www.twitter.com/</span>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <label for="basic-url" class="form-label">Facebook</label>
                <div class="input-group mb-4">
                  <span class="input-group-text" id="basic-addon3">www.facebook.com/</span>
                  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
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
                        <a type="button" href="/mydata" class="btn btn-primary">Simpan</a>
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

<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImage() {
        document.getElementById('foto').value = null;
        frame.src = "/img/foto.svg";
    }
</script>
@extends('dashboard.layouts.main1') @section('container')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-3">Form Post</h1>
        <hr class="mt-2 mb-4" />
        <div class="col-lg-8 mb-5">
            <form>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="fakultas" placeholder="" />
                </div>
                <div class="mb-3">
                    <label for="deskripsisingkat" class="form-label">Deskripsi Singkat</label>
                    <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                </div>
                <div class="mb-3">
                  <label for="fotopost" class="form-label">Foto</label>
                  <input class="form-control " id="formFileSm" type="file">
                </div>
                <div class="mb-3">
                    <label for="isipost" class="form-label">Isi Post</label>
                    <textarea class="form-control" id="deskripsi" rows="3"></textarea>
                </div>
                <!-- Button trigger modal -->
                <button
                    type="button"
                    class="btn btn-primary mt-3"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                >
                    Upload
                </button>

                <!-- Modal -->
                <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Upload Post
                                </h5>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                Data yang telah diisi sudah benar?
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Kembali
                                </button>
                                <a
                                    type="button"
                                    href="/listposts"
                                    class="btn btn-primary"
                                    >Simpan</a
                                >
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

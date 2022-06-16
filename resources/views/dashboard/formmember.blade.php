@extends('dashboard.layouts.main2') @section('container')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-3">Daftar Member</h1>
        <hr class="mt-2 mb-4" />
        <div class="col-lg-8 mb-5">
            <form>
                <div class="mb-3">
                    <label for="InputNama" class="form-label"
                        >Paket</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Semesteran | 6 Bulan</option>
                        <option value="1">Tahunan | 12 Bulan</option>
                        <option value="2">Seumur Hidup</option>
                    </select>
                </div>
                <!-- Harga Autofill berdasarkan paket yang dipilih -->
                <div class="mb-3">
                    <label for="universitas" class="form-label"
                        >Harga</label>
                    <input type="text" class="form-control" id="universitas" placeholder="Rp 299.000" disabled readonly/>
                </div>
                <div class="mb-3">
                    <label for="fakultas" class="form-label">Voucher</label>
                    <input type="text" class="form-control" id="fakultas" placeholder="Silahkan diisi jika anda memiliki voucher" />
                </div>
                <div class="mb-3">
                    <label for="InputNama" class="form-label"
                        >Metode Pembayaran</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>BRI 12342532</option>
                    </select>
                </div>
                <!-- Button trigger modal -->
                <button
                    type="button"
                    class="btn btn-primary mt-3"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                >
                    Daftar
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
                                    Daftar Membership
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
                                    href="/bayar"
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

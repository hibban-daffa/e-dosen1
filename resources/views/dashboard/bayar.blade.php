@extends('dashboard.layouts.main2') @section('container')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-3">Pembayaran</h1>
        <hr class="mt-2 mb-4" />
        <div class="card shadow-sm" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Menunggu Pembayaran</h5>
                <h6 class="card-subtitle mb-2 text-muted">Tahunan | 12 Bulan</h6>
                <hr class="mt-1 mb-3" />
                <h6 class="card-text text-muted">Metode Pembayaran</h6>
                <img src="img/bri.png" alt="" style="width: 75px; height: 75px;">
                <h6 class="card-text text-muted">Nomor Virtual Account</h6>
                <p>12342532</p>
                <h6 class="card-text text-muted">Total</h6>
                <b class= "text-danger text-bold">Rp 299.000</b>
                <br>
                <br>
                <a class="btn btn-primary" href="/membership" >Kembali</a>
            </div>
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

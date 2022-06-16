@extends('dashboard.layouts.main2')

@section('container')
<main>
          <div class="container-fluid px-4">
            <h1 class="mt-3">Membership</h1>
            <hr class="mt-2 mb-4">
            <a class="btn btn-primary mb-4" href="/formmember" >Daftar Member</a>
            <div class="card mb-4">
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Paket</th>
                      <th>Waktu</th>
                      <th>Batas Waktu</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Paket</th>
                      <th>Waktu</th>
                      <th>Batas Waktu</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Bulanan</td>
                      <td>6 Bulan</td>
                      <td>2 Mei 2022</td>
                      <td>Menunggu Pembayaran 
                      <a href="/bayar" class="badge bg-info"><i class="fas fa-eye"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
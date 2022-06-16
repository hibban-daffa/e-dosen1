@extends('dashboard.layouts.main2')

@section('container')
<main>
          <div class="container-fluid px-4">
            <h1 class="mt-3">My Data</h1>
            <hr class="mt-2 mb-4">
            <div class="card mb-4">
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Data</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Profil</td>
                      <td>
                        <a href="/formprofil" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Portofolio</td>
                      <td>
                        <a href="/formporto" class="badge bg-warning"><i class="fas fa-pen"></i></a>
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
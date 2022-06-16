@extends('dashboard.layouts.main1')

@section('container')
<main>
          <div class="container-fluid px-4">
            <h1 class="mt-3">Daftar Post</h1>
            <hr class="mt-2 mb-4">
            <a class="btn btn-primary mb-4" href="/formpost" >Buat Post Baru</a>
            <div class="card mb-4">
              <div class="card-body">
                <table id="datatablesSimple">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Judul</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>System Architect</td>
                      <td>
                        <a href="" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/formpost" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href=" " class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Accountant</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Junior Technical Author</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Senior Javascript Developer</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Accountant</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Integration Specialist</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Sales Assistant</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Integration Specialist</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Javascript Developer</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Software Engineer</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Office Manager</td>
                      <td>
                        <a href="/dashboard" class="badge bg-info"><i class="fas fa-eye"></i></a>
                        <a href="/dashboard" class="badge bg-warning"><i class="fas fa-pen"></i></a>
                        <a href="/dashboard" class="badge bg-danger"><i class="fas fa-trash-can"></i></a>
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
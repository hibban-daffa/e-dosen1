<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login E-Dosen</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
    <!--Main Navigation-->
    <style>
      #intro {
        background-image: url(https://p4.wallpaperbetter.com/wallpaper/590/223/706/design-flower-line-wallpaper-preview.jpg);
        height: 100vh;
      }
    </style>

    <!-- Background image -->
    <div id="intro" class="bg-image">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
             
            <form class="bg-white rounded shadow-5-strong p-5"> 
                <img src="img/logo.png" class ="mx-auto d-block" alt="Logo" style="width: 75px; height: 75px;">
                <h3 class="text-center font-weight-light my-2">Login</h3> 
                <div class="form-floating mb-3">
                        <input class="form-control"  id="Name" type="text" placeholder=""/>
                        <label for="inputName">Username</label>
                    </div>               
                    <div class="form-floating mb-3">
                        <input class="form-control"  id="Name" type="password" placeholder="" />
                        <label for="inputName">Password</label>
                    </div> 

                <!-- Submit button -->
                <div class="d-grid">
                    <a class="btn btn-primary btn-lg mb-3" href="/dashboard dosen">Login</a>
                </div>
                <div class="text-center">
                  <p>Belum memiliki akun? <a href="/register">Sign Up</a></p>
                  <div class="row">
                    <div class="col">
                      <hr>
                    </div>
                    <div class="col-2">
                    <p>atau</p>
                    </div>
                    <div class="col">
                      <hr>
                    </div>               
                  </div>
                
                </div>
                <div class="d-grid">
                    <a class="btn btn-lg" href="/dashboard" >
                      <div class="row row-cols-auto justify-content-center" >
                        <div class="col-3">
                        <img src="img/google.png" alt="" style="width: 20px; height: 20px;">
                        </div>
                        <div class="col">
                          Login dengan Google
                        </div>
                      </div>
                    </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
  </body>
</html>

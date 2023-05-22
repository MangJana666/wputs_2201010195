<?php
    include("cmd/user.php");
    $psn = "";
    if(isset($_POST["txPASS1"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];
            if(createuser($nama,$email,$user,$pass)){
              header("Location: login.php");
              exit();
            }else{
                $psn = "Create Data Gagal";
            }
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="foto/ikon.png"
                    style="width: 150px;" alt="logo">
                  <h4 class="mt-2 mb-5 pb-1">Registrasi Akun</h4>
                </div>

                <form action="registrasi.php" method="POST">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11 mb-2">Nama Lengkap</label>
                    <input type="text" name="txNAMA" id="form2Example11" class="form-control"
                      placeholder="Masukan Nama Lengkap" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22 mb-2">Email</label>
                    <input type="email" name="txEMAIL" id="form2Example22" class="form-control" 
                    placeholder="Masukan Email" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22 mb-2">Username</label>
                    <input type="text" name="txUSER" id="form2Example22" class="form-control" 
                    placeholder="Masukan Username" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22 mb-2">Password</label>
                    <input type="password" name="txPASS1" id="form2Example22" class="form-control" 
                    placeholder="Masukan Password" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22 mb-2">Konfirmasi Password</label>
                    <input type="password" name="txPASS2" id="form2Example22" class="form-control" 
                    placeholder="Masukan Ulang Password" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrasi</button>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a University</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
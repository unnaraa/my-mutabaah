<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi My Mutabaah</title>
    <link rel="stylesheet" href="{{ asset('Sign/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
          
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Register My Mutabaah</p>
                </div>
      
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Name</label>
                    <input type="text" name="nama" class="form-control form-control-lg"
                    placeholder="Masukkan Nama Lengkap" />
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Nomor Hp Aktif</label>
                    <input type="number" name="nomor_hp" class="form-control form-control-lg"
                    placeholder="Masukkan Nomor Telepon" />
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Jenis Kelamin</label>
                    <select id="status" name="jenis_kelamin" required class="form-control form-control-lg">
                      <option value="">Jenis Kelamin</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                  </select>                
                </div>
                
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" name="email" class="form-control form-control-lg"
                    placeholder="Masukkan Email" />
                </div>
      
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" name="password" class="form-control form-control-lg"
                    placeholder="Masukkan Password" />
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  {{-- <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" name="" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div> --}}
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Sign Up</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Have an account? <a href="{{ route('login')}}"
                      class="link-danger">Login</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        {{-- <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright © 2020. All rights reserved.
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          
          <!-- Right -->
        </div> --}}
      </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
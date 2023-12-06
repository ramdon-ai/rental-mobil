<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>

<body>
<section class="" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          <h3 class="mb-5">Registrasi</h3>

<form method="POST" action="{{ route('actionregister') }}">
    @csrf

    <div class="form-outline mb-4">
        <label class="form-label" for="name">Nama</label>
        <input type="text" id="name" name="name" class="form-control form-control-lg" required />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="address">Alamat</label>
        <input type="text" id="address" name="address" class="form-control form-control-lg" required />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="phone_number">No. Handphone</label>
        <input type="text" id="phone_number" name="phone_number" class="form-control form-control-lg" required />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="driving_license_number">No. SIM</label>
        <input type="text" id="driving_license_number" name="sim" class="form-control form-control-lg" required />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control form-control-lg" required />
    </div>

    <button class="btn btn-success btn-lg btn-block" type="submit">Register</button>
    <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>

</form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Mobil</title>
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

          <h3 class="mb-5">Tambah Mobil</h3>

          <form method="post" action="{{ route('addcar') }}">
        @csrf

        <!-- Tambahkan input dan elemen formulir lainnya sesuai kebutuhan -->
        <label for="brand">Merek:</label>
        <input type="text" name="brand" required>

        <label for="model">Model:</label>
        <input type="text" name="model" required>

        <label for="license_plate">Nomor Plat:</label>
        <input type="text" name="license_plate" required>

        <label for="rental_rate">Tarif Sewa:</label>
        <input type="text" name="harga" required>

        <!-- Tombol "Tambahkan" -->
        <button type="submit">Tambahkan</button>
    </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<body>
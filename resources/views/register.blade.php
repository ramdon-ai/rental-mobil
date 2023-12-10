<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registrasi Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container"><br>
            <div class="col-md-4 col-md-offset-4">
                <h2 class="text-center">Silahkan Registrasi</h2>
                <hr>

                <form action="{{ route('aksiregister') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required="">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required="">
                    </div>

                    <div class="form-group">
                        <label>No. Handphone</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No. Handphone" required="">
                    </div>

                    <div class="form-group">
                        <label>No. SIM</label>
                        <input type="text" name="no_sim" class="form-control" placeholder="No. SIM" required="">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="role" class="form-control" placeholder="role" value="pengguna">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Registrasi</button>

                    <hr>
                    <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Login</a> sekarang!</p>
                </form>
            </div>
        </div>
    </body>
</html>
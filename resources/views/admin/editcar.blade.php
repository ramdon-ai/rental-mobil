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
                <h2 class="text-center">Tambah Mobil</h2>
                <hr>

                <form action="{{ route('aksicar') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Merek</label>
                        <input type="text" name="merek" class="form-control" placeholder="Masukkan Merek" required="">
                    </div>

                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" name="model" class="form-control" placeholder="Masukkan Model" required="">
                    </div>

                    <div class="form-group">
                        <label>No. Plat</label>
                        <input type="text" name="no_plat" class="form-control" placeholder="Masukkan No. Plat" required="">
                    </div>

                    <div class="form-group">
                        <label>Harga Sewa</label>
                        <input type="text" name="sewa" class="form-control" placeholder="Masukkan Sewa" required="">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Tambah</button>

                    <hr>
                </form>
            </div>
        </div>
    </body>
</html>
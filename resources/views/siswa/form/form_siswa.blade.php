<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Lembar Kerja Siswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="mt-4">Lembar Kerja Siswa</h1>
            <form action="">
                @csrf
                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Nama Lengkap</small>
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Kode Peserta</small>
                </div>

                <div class="form-group">
                    <label for=""></label>
                    <input type="date" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Tanggal Tes</small>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>
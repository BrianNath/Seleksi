<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container zx">
        <h1 class="title-ujian">Tes Matematika</h1>
        <hr class="lines">
        <div class="row d-flex justify-content-center">
            @php
            $i = 1
            @endphp
            @foreach($dataa as $datas)
            <form class="form-siswa d-flex justify-content-center" action="">
                <div class="card kard-soal">
                    <h4 class="card-title">{{ $i++ }}</h4>
                    <img src="/img/foto_soal/{{ $datas -> image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $datas -> soal }}</h5>
                        <div class="radio">
                            <input type="radio" name="" id="">
                            <label for="">{{ $datas -> opsi1 }}</label><br>
                            <input type="radio" name="" id="">
                            <label for="">{{ $datas -> opsi2 }}</label><br>
                            <input type="radio" name="" id="">
                            <label for="">{{ $datas -> opsi3 }}</label><br>
                            <input type="radio" name="" id="">
                            <label for="">{{ $datas -> opsi4 }}</label><br>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
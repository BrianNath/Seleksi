@extends('layouts.admin')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        @if(session()->get('success'))
            <div class="alert">
                <script>
                    swal({
                        title:"",
                        text:"{{ session()->get('success') }}",
                        icon:"success",
                        });
                </script>
            </div>
        @endif
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ Route('akademik') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        <div class="row">
            <div class="card" style="background-color:lightblue; border-color:darkblue; width:400px;">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">Nama Siswa</h4>
                    <p class="card-text">Skor Siswa :</p>
                    <ul>
                        <li><p>Matematika : </p></li>
                        <li><p>Bahasa Indonesia : </p></li>
                        <li><p>Bahasa Inggris : </p></li>
                    </ul>
                    <p>Rata-Rata Skor :</p>
                    <p>Status :</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
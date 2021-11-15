@extends('siswa.layouts-siswa.admin')

@section('main-content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ujian Seleksi | SMK Bagimu Negeriku</title>
</head>
<body>
    <br>
    <div class="container container1">
        <h1 class="juduls">Seleksi Akademik</h1>
        <div class="row d-flex justify-content-center">
            <div class="card s">
                <img class="foto-atas" src="{{ asset('img/indonesia.png') }}" alt="" style="width:150px;">
                <div class="card-body">
                    <h4 class="card-title">Bahasa Indonesia</h4>
                    <p class="card-text">Waktu Pengerjaan : 120 menit</p>
                    <p class="card-text">Status : Belum Selesai</p>
                </div>
                <div class="card-body card-body1">
                    <a href="{{ Route('compact_data') }}" class="card-link btn btn-light">Mulai</a>
                </div>
            </div>
            <div class="card s">
                <img class="foto-atas" src="{{ asset('img/english.png') }}" alt="" style="width:150px;">
                <div class="card-body">
                    <h4 class="card-title">Bahasa Inggris</h4>
                    <p class="card-text">Waktu Pengerjaan : 120 menit</p>
                    <p class="card-text">Status : Belum Selesai</p>
                </div>
                <div class="card-body card-body1">
                    <a href="#" class="card-link btn btn-light">Mulai</a>
                </div>
            </div>
            <div class="card s">
                <img class="foto-atas" src="{{ asset('img/math.png') }}" alt="" style="width:150px;">
                <div class="card-body">
                    <h4 class="card-title">Matematika</h4>
                    <p class="card-text">Waktu Pengerjaan : 120 menit</p>
                    <p class="card-text">Status : Belum Selesai</p>
                </div>
                <div class="card-body card-body1">
                    <a href="#" class="card-link btn btn-light">Mulai</a>
                </div>
            </div>
        </div>
        <hr style="margin-bottom:30px;">
        <h1 class="juduls">Seleksi Psikotes</h1>
        <div class="row d-flex justify-content-center">
            <div class="card x">
                <img class="foto-atas" src="{{ asset('img/math.png') }}" alt="" style="width:100px;">
                <div class="card-body">
                    <h4 class="card-title">Matematika</h4>
                    <p class="card-text">Waktu Pengerjaan : 120 menit</p>
                    <p class="card-text">Status : Belum Selesai</p>
                </div>
                <div class="card-body card-body1">
                    <a href="#" class="card-link btn btn-light">Another link</a>
                </div>
            </div>
            <div class="card x">
                <img class="foto-atas" src="{{ asset('img/math.png') }}" alt="" style="width:100px;">
                <div class="card-body">
                    <h4 class="card-title">Matematika</h4>
                    <p class="card-text">Waktu Pengerjaan : 120 menit</p>
                    <p class="card-text">Status : Belum Selesai</p>
                </div>
                <div class="card-body card-body1">
                    <a href="#" class="card-link btn btn-light">Another link</a>
                </div>
            </div>
            <div class="card x">
                <img class="foto-atas" src="{{ asset('img/math.png') }}" alt="" style="width:100px;">
                <div class="card-body">
                    <h4 class="card-title">Matematika</h4>
                    <p class="card-text">Waktu Pengerjaan : 120 menit</p>
                    <p class="card-text">Status : Belum Selesai</p>
                </div>
                <div class="card-body card-body1">
                    <a href="#" class="card-link btn btn-light">Another link</a>
                </div>
            </div>
            <div class="card x">
                <img class="foto-atas" src="{{ asset('img/math.png') }}" alt="" style="width:100px;">
                <div class="card-body">
                    <h4 class="card-title">Matematika</h4>
                    <p class="card-text">Waktu Pengerjaan : 120 menit</p>
                    <p class="card-text">Status : Belum Selesai</p>
                </div>
                <div class="card-body card-body1">
                    <a href="#" class="card-link btn btn-light">Another link</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


@endsection
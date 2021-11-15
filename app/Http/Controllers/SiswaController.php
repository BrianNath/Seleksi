<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class SiswaController extends Controller
{
    // public function view(Request $request){
    //     return view('siswa.form.form_siswa');
    // }
    // public function siswaKirim(){

    // }

    public function form(){
        return view('siswa.home');
    }
    public function index(){
        $users = User::count();
        $widget = [
            'users' => $users,
        ];
        return view('siswa.home', compact('widget'));
    }

    public function indonesia(){
        $data = DB::table('soals')->select('image', 'soal', 'opsi1', 'opsi2', 'opsi3', 'opsi4')->where('kategori', 'indonesia')->get();
        
        return view('siswa.form_indonesia', ['data' => $data]);
    }
    public function inggris(){
        $datas = DB::table('soals')->select('image', 'soal', 'opsi1', 'opsi2', 'opsi3', 'opsi4')->where('kategori', 'inggris')->get();

        return view('siswa.form_inggris', ['datas' => $datas]);
    }
    public function matematika(){
        $dataa = DB::table('soals')->select('image', 'soal', 'opsi1', 'opsi2', 'opsi3', 'opsi4')->where('kategori', 'matematika')->get();

        return view('siswa.form_matematika', ['dataa' => $dataa]);
    }
}

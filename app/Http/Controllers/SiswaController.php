<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function view(Request $request){
        return view('siswa.form.form_siswa');
    }
    public function siswaKirim(){

    }
}

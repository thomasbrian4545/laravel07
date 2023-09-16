<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        return "Berhasil di proses";
    }

    public function insertSql()
    {
        $result = DB::insert("INSERT INTO mahasiswas (nim,nama,tanggal_lahir,ipk)
        VALUES ('19003036','Sari Citra Lestari','2001-12-31',3.5)");
        dump($result);
    }
}

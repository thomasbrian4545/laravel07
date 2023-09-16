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

    public function insertTimestamp()
    {
        $result = DB::insert(
            "INSERT INTO mahasiswas
            (nim, nama, tanggal_lahir, ipk, created_at, updated_at)
            VALUES
            ('19002032','Rina Kumala Sari','2000-06-28',3.4,now(),now())"
        );
        dump($result);
    }

    public function insertPrepared()
    {
        $result = DB::insert(
            'INSERT INTO mahasiswas
            (nim, nama, tanggal_lahir, ipk, created_at, updated_at)
            VALUES (?,?,?,?,?,?)',
            ['18012012', 'James Situmorang', '1999-04-02', 2.7, now(), now()]
        );
        dump($result);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController
{
    public function index()
    {
        $Mhs = DB::select('select * from Mahasiswa');
        return view('MahasiswaRaw', ['data' => $Mhs, 'title' => 'Mahasiswa']);
    }
    public function insert()
    {
        $Mhs = DB::insert("insert into 
        Mahasiswa(
            npm,
            nama, 
            jenis_kelamin, 
            alamat,
            tempat_lahir,
            tanggal_lahir,
            photo)
        values(
            '0610',
            'Afiva Yuazijah',
            'Perempuan',
            'Karawang',
            'Jawa Tengah',
            '2002-10-06',
            'Pantai'
            )");
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $Mhs = DB::delete('delete from Mahasiswa where id=4');
        return "Berhasil dihapus";
    }
    public function update()
    {
        $MhsUpdate = DB::update("update Mahasiswa set nama='Paimin' where id = 5");
        return "Berhasil diupdate";
    }
}

// Raw SQL

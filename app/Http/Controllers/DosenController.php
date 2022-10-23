<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DosenEloquent;


class DosenController

{
    public function index()
    {
        $dsn = DosenEloquent::all();
        return view('DosenEloqORM', ['data' => $dsn], ['title' => 'Dosen']);
    }
    public function insert()
    {
        DosenEloquent::create([
            'nidn' => '0610',
            'nama' => 'Afiva Yuazijah',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Karawang',
            'tempat_lahir' => 'Karawang',
            'tanggal_lahir' => '2002-10-06',
            'photo' => 'Pasir Pantai',
        ]);
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $dsn = DosenEloquent::where('nama', 'Yuazijah')->delete();
        return "Berhasil dihapus";
    }
    public function update()
    {
        $dsn = DosenEloquent::where('id', 8)->first()->update([
            'nama' => 'Afiva'
        ]);
        return "Berhasil diupdate";
    }
}

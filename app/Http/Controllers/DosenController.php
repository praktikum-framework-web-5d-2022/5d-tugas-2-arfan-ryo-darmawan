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
            'nidn' => '3333',
            'nama' => 'Arfan',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Bekasi',
            'tempat_lahir' => 'Bekasi',
            'tanggal_lahir' => '2002-03-31',
            'photo' => 'Lapangan Futsal',
        ]);
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $dsn = DosenEloquent::where('nama', 'Arfan')->delete();
        return "Berhasil dihapus";
    }
    public function update()
    {
        $dsn = DosenEloquent::where('id', 8)->first()->update([
            'nama' => 'Darmawan'
        ]);
        return "Berhasil diupdate";
    }
}

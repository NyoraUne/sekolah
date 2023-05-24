<?php

namespace App\Controllers;

use App\Models\Mod_Kelas;

class Nilai extends BaseController
{
    protected $Mod_Kelas;

    public function __construct()
    {
        $this->Mod_Kelas = model(Mod_Kelas::class);
    }

    public function index()
    {

        $Mod_Kelas = new Mod_Kelas();
        $kelas = $Mod_Kelas->findAll();
        // dd($kelas);
        $data = [
            'kelas' => $kelas,
        ];
        echo view('nav/head');
        echo view('nilai_siswa/index', $data);
        echo view('nav/foot');
    }
}

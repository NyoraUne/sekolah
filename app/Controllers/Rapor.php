<?php

namespace App\Controllers;

use App\Models\Mod_Kelas;
use App\Models\Mod_Thajaran;

class Rapor extends BaseController
{
    protected $Mod_Kelas;
    protected $Mod_Thajaran;

    public function __construct()
    {
        $this->Mod_Kelas = model(Mod_Kelas::class);
        $this->Mod_Thajaran = model(Mod_Thajaran::class);
    }
    public function index()
    {
        $Mod_Kelas = new Mod_Kelas();
        $kelas = $Mod_Kelas->findAll();

        $Mod_Thajaran = new Mod_Thajaran();
        $thn_ajaran = $Mod_Thajaran->findAll();

        $data = [
            'kelas' => $kelas,
            'thn_ajaran' => $thn_ajaran,
        ];
        echo view('nav/head');
        echo view('rapor/rapor', $data);
        echo view('nav/foot');
    }
}

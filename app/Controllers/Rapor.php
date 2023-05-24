<?php

namespace App\Controllers;

use App\Models\Mod_Kelas;
use App\Models\Mod_Thajaran;
use App\Models\Mod_Nilai;
use App\Models\Mod_Mapel;


class Rapor extends BaseController
{
    protected $Mod_Kelas;
    protected $Mod_Thajaran;
    protected $Mod_Nilai;
    protected $Mod_Mapel;

    public function __construct()
    {
        $this->Mod_Kelas = model(Mod_Kelas::class);
        $this->Mod_Mapel = model(Mod_Mapel::class);
        $this->Mod_Thajaran = model(Mod_Thajaran::class);
        $this->Mod_Nilai = model(Mod_Nilai::class);
    }
    public function index()
    {
        $Mod_Kelas = new Mod_Kelas();
        $kelas = $Mod_Kelas->findAll();

        $Mod_Mapel = new Mod_Mapel();
        $mapel = $Mod_Mapel->findAll();

        $Mod_Thajaran = new Mod_Thajaran();
        $thn_ajaran = $Mod_Thajaran->findAll();

        $Mod_Nilai = new Mod_Nilai();
        $nilai = $Mod_Nilai->getjo();


        $data = [
            'nilai' => $nilai,
            'mapel' => $mapel,
            'kelas' => $kelas,
            'thn_ajaran' => $thn_ajaran,
        ];
        echo view('nav/head');
        echo view('rapor/rapor', $data);
        echo view('nav/foot');
    }
}

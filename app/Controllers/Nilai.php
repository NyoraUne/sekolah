<?php

namespace App\Controllers;

use App\Models\Mod_Kelas;
use App\Models\Mod_Thajaran;
use App\Models\Mod_Nilai;
use App\Models\Mod_Kelas_Siswa;


class Nilai extends BaseController
{
    protected $Mod_Kelas;
    protected $Mod_Kelas_Siswa;
    protected $Mod_Thajaran;
    protected $Mod_Nilai;



    public function __construct()
    {
        $this->Mod_Kelas_Siswa = model(Mod_Kelas_Siswa::class);
        $this->Mod_Kelas = model(Mod_Kelas::class);
        $this->Mod_Thajaran = model(Mod_Thajaran::class);
        $this->Mod_Nilai = model(Mod_Nilai::class);
    }

    public function index()
    {

        $Mod_Kelas_Siswa = new Mod_Kelas_Siswa();

        $Mod_Kelas = new Mod_Kelas();
        $kelas = $Mod_Kelas->findAll();

        $Mod_Thajaran = new Mod_Thajaran();
        $thn_ajaran = $Mod_Thajaran->findAll();

        $Mod_Nilai = new Mod_Nilai();

        // dd($nilai);


        $kelas_data = $this->request->getVar('kelas');
        $status = $this->request->getVar('status');
        $thn = $this->request->getVar('thn_ajaran');
        // dd($thn);

        if ($kelas_data == '' && $status == '' && $thn == '') {



            $nilai = $Mod_Kelas_Siswa->select('*')
                ->join('kelas', 'kelas.id_kelas = kelas_siswa.id_kelas')
                ->join('siswa', 'siswa.id_siswa = kelas_siswa.id_siswa')
                ->findAll();


            // dd($nilai);
            $data = [
                'kelas' => $kelas,
                'thn_ajaran' => $thn_ajaran,
                'nilai' => $nilai,
            ];

            echo view('nav/head');
            echo view('nilai_siswa/index', $data);
            echo view('nav/foot');
        } else {
            $nilai2 = $Mod_Kelas_Siswa->select('*')
                ->join('kelas', 'kelas.id_kelas = kelas_siswa.id_kelas')
                ->join('siswa', 'siswa.id_siswa = kelas_siswa.id_siswa')
                ->where('kelas.id_kelas', $kelas_data)
                ->where('kelas_siswa.status', $status)
                // ->where('thn_ajaran.id_thn_ajaran', $thn)
                ->orWhere('kelas.id_kelas', $kelas_data)
                ->orWhere('kelas_siswa.status', $status)
                // ->orWhere('thn_ajaran.id_thn_ajaran', $thn)
                ->findAll();

            // dd($nilai2);




            // dd($kelas, $status, $thn);

            $data2 = [
                'kelas' => $kelas,
                'thn_ajaran' => $thn_ajaran,
                'nilai' => $nilai2,
            ];
            echo view('nav/head');
            echo view('nilai_siswa/index', $data2);
            echo view('nav/foot');
        }
    }
    public function isinilai($slug)
    {
        $data = [];

        echo view('nav/head');
        echo view('nilai_siswa/tbh_nilai', $data);
        echo view('nav/foot');
    }
}

<?php


namespace App\Controllers;

use app\Models\Mod_Siswa;


class siswa extends BaseController
{
    protected $Mod_Siswa;

    public function __construct()
    {
        $this->Mod_Siswa = model(Mod_Siswa::class);
    }

    public function index()
    {
        $Mod_Siswa = new Mod_Siswa();
        $siswa = $Mod_Siswa->findAll();
        // dd($siswa);
        $data = [
            'siswa' => $siswa,
        ];

        echo view('nav/head');
        echo view('siswa/siswa', $data);
        echo view('nav/foot');
    }
    public function tambah_siswa()
    {
        $data = [
            'nama_siswa' => $this->request->getPost('nama_siswa'),
            'alamat_siswa' => $this->request->getPost('alamat_siswa'),
            'telp_siswa' => $this->request->getPost('telp_siswa'),
            'kelas_siswa' => $this->request->getPost('kelas_siswa')
        ];

        $tambah_siswa = new Mod_Siswa();
        $tambah_siswa->insert($data);

        return redirect()->to('Siswa');
    }
    public function hap()
    {
        # code...
    }
}

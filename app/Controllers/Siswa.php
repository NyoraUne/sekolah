<?php


namespace App\Controllers;

use app\Models\Mod_Siswa;
use app\Models\Mod_Kelas_Siswa;
use App\Models\Mod_Kelas;


class siswa extends BaseController
{
    protected $Mod_Siswa;
    protected $Mod_Kelas;
    protected $Mod_Kelas_Siswa;

    public function __construct()
    {
        $this->Mod_Siswa = model(Mod_Siswa::class);
        $this->Mod_Kelas = model(Mod_Kelas::class);
        $this->Mod_Kelas_Siswa = model(Mod_Kelas_Siswa::class);
    }

    public function index()
    {
        $Mod_Kelas = new Mod_Kelas();
        $kelas = $Mod_Kelas->findAll();

        $Mod_Kelas_Siswa = new Mod_Kelas_Siswa();
        $Mod_Siswa = new Mod_Siswa();
        $siswa = $Mod_Siswa->select('*')
            ->join('kelas_siswa', 'kelas_siswa.id_siswa = siswa.id_siswa')
            ->join('kelas', 'kelas.id_kelas = kelas_siswa.id_kelas')
            ->findAll();

        // dd($siswa);
        $data = [
            'siswa' => $siswa,
            'kelas' => $kelas,
        ];

        echo view('nav/head');
        echo view('siswa/siswa', $data);
        echo view('nav/foot');
    }


    public function tambah_siswa()
    {
        $siswaModel = new Mod_Siswa();
        $kelasSiswaModel = new Mod_Kelas_Siswa();

        // Mulai transaksi
        $siswaModel->transStart();


        try {
            // Data siswa
            $nama = $this->request->getVar('nama_siswa');
            $nama = ucfirst($nama);
            $telp = $this->request->getVar('telp_siswa');
            $telps = substr($telp, -5);
            $slug = url_title($this->request->getVar('nama_siswa'), '-', true);
            $slugs = $slug . '_' . $telps;

            $dataSiswa = [
                'nama_siswa' => $nama,
                'slug' => $slugs,
                'alamat_siswa' => $this->request->getPost('alamat_siswa'),
                'telp_siswa' => $telp,
            ];
            // dd($dataSiswa);

            // Insert data siswa
            $siswaModel->insert($dataSiswa);
            // Ambil ID siswa yang baru saja ditambahkan
            $idSiswa = $siswaModel->insertID();

            // Data kelas_siswa
            $dataKelasSiswa = [
                'id_siswa' => $idSiswa,
                'id_kelas' => $this->request->getPost('kelas_siswa'),
                'status' => 'Aktif',
            ];

            // dd($dataKelasSiswa);

            // Insert data kelas_siswa
            $kelasSiswaModel->insert($dataKelasSiswa);

            // Commit transaksi jika berhasil
            $siswaModel->transCommit();

            // Redirect ke halaman sukses
            return redirect()->to('Siswa');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            $siswaModel->transRollback();

            // Tampilkan pesan error atau lakukan penanganan kesalahan lainnya
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
    public function tambah()
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
}

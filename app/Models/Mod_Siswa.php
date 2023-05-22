<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Siswa extends Model
{
    protected $table      = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_siswa', 'alamat_siswa', 'telp_siswa', 'kelas_siswa', 'created_at'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at ';
    protected $updatedField  = '';
    protected $deletedField  = '';
}

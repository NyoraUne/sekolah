<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Kelas_Siswa extends Model
{
    protected $table      = 'kelas_siswa';
    protected $primaryKey = 'id_kelas_siswa';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kelas', 'id_siswa', 'status'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at ';
    protected $updatedField  = '';
    protected $deletedField  = '';
}

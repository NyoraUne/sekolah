<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Nilai extends Model
{
    protected $table      = 'nilai';
    protected $primaryKey = 'id_nilai';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kelas_siswa', 'id_mapel', 'nilai', 'id_thn_ajaran', 'created_at'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at ';
    protected $updatedField  = '';
    protected $deletedField  = '';
}

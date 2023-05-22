<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Kelas extends Model
{
    protected $table      = 'kelas';
    protected $primaryKey = 'id_kelas';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_kelas'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at ';
    protected $updatedField  = '';
    protected $deletedField  = '';
}

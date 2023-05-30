<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Mapel extends Model
{
    protected $table      = 'mapel';
    protected $primaryKey = 'id_mapel';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_mapel', 'mapel_kkm'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at ';
    protected $updatedField  = '';
    protected $deletedField  = '';
}

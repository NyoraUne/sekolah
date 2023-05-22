<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_Thajaran extends Model
{
    protected $table      = 'thn_ajaran';
    protected $primaryKey = 'id_thn_ajaran';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['semester', 'thn_ajaran'];

    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at ';
    protected $updatedField  = '';
    protected $deletedField  = '';
}

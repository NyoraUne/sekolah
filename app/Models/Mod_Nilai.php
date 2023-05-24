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


    public function getjo()
    {
        $builder = $this->db->table('nilai');
        $builder->select('*');
        $builder->join('thn_ajaran', 'thn_ajaran.id_thn_ajaran = nilai.id_thn_ajaran');
        $builder->join('mapel', 'mapel.id_mapel = nilai.id_mapel');
        $builder->join('kelas_siswa', 'kelas_siswa.id_kelas_siswa = nilai.id_kelas_siswa');
        $builder->join('kelas', 'kelas.id_kelas = kelas_siswa.id_kelas');
        $builder->join('siswa', 'siswa.id_siswa = kelas_siswa.id_siswa');
        $query = $builder->get();

        return $query->getResult();
    }
    public function getja()
    {
        $builder = $this->db->table('nilai');
        $builder->join('thn_ajaran', 'thn_ajaran.id_thn_ajaran = nilai.id_thn_ajaran');
        $builder->join('mapel', 'mapel.id_mapel = nilai.id_mapel');
        $builder->join('kelas_siswa', 'kelas_siswa.id_kelas_siswa = nilai.id_kelas_siswa');
        $builder->join('kelas', 'kelas.id_kelas = kelas_siswa.id_kelas');
        $builder->join('siswa', 'siswa.id_siswa = kelas_siswa.id_siswa');
        $query = $builder->get();

        return $query->getResult();
    }
}

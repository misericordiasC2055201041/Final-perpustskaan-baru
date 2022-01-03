<?php
namespace App\Models;
use CodeIgniter\Model;
class MahasiswaModel extends Model
{
 protected $table = "mahasiswa";
 protected $primaryKey = "nim";
 protected $returnType = "object";
 protected $useTimestamps = true;
 protected $allowedFields = ['nim', 'nama', 'jurusan', 'jenis_kelamin', 'no_telp', 'email', 'alamat', 'foto'];
 
 function getAll()
 {
     $builder = $this->db->table('mahasiswa');
     $builder->join('transaksi', 'transaksi.nim_anggota = mahasiswa.nim', 'left');
     $query = $builder->get();
    return $query->getResult();
 }

 }
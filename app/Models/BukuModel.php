<?php
namespace App\Models;
use CodeIgniter\Model;
class BukuModel extends Model
{
 protected $table = "buku";
 protected $primaryKey = "kode";
 protected $returnType = "object";
 protected $useTimestamps = true;
 protected $allowedFields = ['kode', 'judul', 'penulis', 'penerbit', 'foto'];


function getAll()
 {
     $builder = $this->db->table('buku');
     $builder->select('*');
     $builder->join('transaksi', 'transaksi.kode_buku=buku.kode', 'left');
     $query = $builder->get();
    return $query->getResult();
 }
}
?>


 
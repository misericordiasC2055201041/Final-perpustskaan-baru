<?php
namespace App\Models;
use CodeIgniter\Model;
class TransaksiModel extends Model
{
 protected $table = "transaksi";
 protected $primaryKey = "id";
 protected $returnType = "object";
 protected $useTimestamps = true;
 protected $allowedFields = ['id', 'kode_buku', 'nim_anggota',
  'tanggal_pinjam', 'tanggal_kembali', 'status', 'denda'];
}
 
<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id' => [
        'type' => 'int',
        'constraint' => '10' ,
        'unsigned' => true,
        'auto_increment' => true,
        ],
        'kode_buku' => [
        'type' => 'varchar',
        'constraint' => '255',
        ],
        'nim_anggota' => [
        'type' => 'varchar',
        'constraint' => '11',
        ],
        'tanggal_pinjam' => [
        'type' => 'datetime',
        'default' => 'CURRENT_TIMESTAMP()',
        ],
        'tanggal_kembali' => [
        'type' => 'datetime',
        ],
        'status' => [
        'type' => 'ENUM',
        'constraint' => "'Dipinjam','kembali'",
        'default' => 'Dipinjam',
        ],
        'denda' => [
        'type' => 'float',
        'null' => true,
        ],
        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
            ],
            'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
            ],
        ]);
    
    $this->forge->addPrimaryKey('id');
    $this->forge->addForeignKey('kode_buku', 'buku', 'kode');
    $this->forge->addForeignKey('nim_anggota', 'mahasiswa', 'nim');
    $this->forge->createTable('transaksi');
    }
    //--------------------------------------------------------------------
    public function down()
    {
    $this->forge->addForeignKey('transaksi', 'transaksi_kode_buku_foreign');
    $this->forge->addForeignKey('transaksi', 'transaksi_nim_anggota_foreign');
    $this->forge->dropTable('transaksi');
    }
    }
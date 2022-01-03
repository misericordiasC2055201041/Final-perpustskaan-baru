<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Buku extends Migration
{
public function up()
{
$this->forge->addField([
'kode' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'judul' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'slug' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'penulis' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'penerbit' => [
'type' => 'VARCHAR',
'constraint' => '255',
],
'foto' => [
'type' => 'VARCHAR',
'constraint' => '500'
],
'created_at' => [
'type' => 'DATETIME',
'null' => true,
],
'updated_at' => [
'type' => 'DATETIME',
'null' => true,
]
]);
$this->forge->addPrimaryKey('kode');
$this->forge->createTable('buku');
}
//--------------------------------------------------------------------
public function down()
{
$this->forge->dropTable('buku');
}
}
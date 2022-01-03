<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class UsersSeeder extends Seeder
{
 public function run()
 {
 //
 $data = [
 [
 'username' => 'miseri',
 'password' => password_hash('offjumpol', PASSWORD_BCRYPT),
 'name' => 'miseri',
 'created_at' => Time::now()
 ]
 ];
 $this->db->table('users')->insertBatch($data);
 }
}
<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class MahasiswaSeeder extends Seeder
{
public function run()
{
    $data = [
        [
        'nim' => 'C2055201048',
        'nama' => 'ANGGELINA RENTIKA KAROLINA',
        'jurusan' => 'Teknik Informatika',
        'jenis_kelamin' => 'wanita',
        'no_telp' => '085750841933',
        'email' => 'anggelinarentikakarolina@gmail.com',
        'alamat' => 'Jalan Pramuka 1 Kos Milenial NO.10 Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2055201041',
        'nama' => 'MISERICORDIAS DOMINI NATALIA BORU PANDIANGAN',
        'jurusan' => 'Teknik Informatika',
        'jenis_kelamin' => 'wanita',
        'no_telp' => '085753887632',
        'email' => 'misericordias@gmail.com',
        'alamat' => 'Jalan RTA MILONO Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2055201042',
        'nama' => 'ANJELA RASTIANA',
        'jurusan' => 'Teknik Informatika',
        'jenis_kelamin' => 'wanita',
        'no_telp' => '087838547716',
        'email' => 'anjelarastiana@gmail.com',
        'alamat' => 'Jalan Tjilik Riwut Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2055201049',
        'nama' => 'SRI AYU',
        'jurusan' => 'Teknik Informatika',
        'jenis_kelamin' => 'wanita',
        'no_telp' => '081350201762',
        'email' => 'sriayu@gmail.com',
        'alamat' => 'Jalan Jati Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2055201050',
        'nama' => 'FRENGKI APRIMO MANEK',
        'jurusan' => 'Teknik Informatika',
        'jenis_kelamin' => 'pria',
        'no_telp' => '081350200171',
        'email' => 'frengkiaprimomanek@gmail.com',
        'alamat' => 'Jalan G.Obos 7 Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2055201051',
        'nama' => 'JIMMY ULU',
        'jurusan' => 'Sistem Informasi',
        'jenis_kelamin' => 'pria',
        'no_telp' => '081339179796',
        'email' => 'jimmyulu@gmail.com',
        'alamat' => 'Jalan Rajawali Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2055201052',
        'nama' => 'JANUARIUS OLLIN',
        'jurusan' => 'Sistem Informasi',
        'jenis_kelamin' => 'pria',
        'no_telp' => '081288121169',
        'email' => 'januariusollin@gmail.com',
        'alamat' => 'Jalan Garuda Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2055201060',
        'nama' => 'SANTOS',
        'jurusan' => 'Sistem Informasi',
        'jenis_kelamin' => 'pria',
        'no_telp' => '081255674682',
        'email' => 'santos@gmail.com',
        'alamat' => 'Jalan Temanggung Tilung Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2055201065',
        'nama' => 'YANTO MANTANO',
        'jurusan' => 'Sistem Informasi',
        'jenis_kelamin' => 'pria',
        'no_telp' => '085705150121',
        'email' => 'yantomantano@gmail.com',
        'alamat' => 'Jalan Menteng Palangkaraya',
        'created_at' => Time::now()
        ],
        [
        'nim' => 'C2157201021',
        'nama' => 'RISMA UTAMI HANDAYANI',
        'jurusan' => 'Sistem Informasi',
        'jenis_kelamin' => 'wanita',
        'no_telp' => '081351680382',
        'email' => 'rismautamihandayani@gmail.com',
        'alamat' => 'Jalan B.Koetin Kos Putri Berlian NO.4 Palangkaraya',
        'created_at' => Time::now()
        ]
        ];
$this->db->table('mahasiswa')->insertBatch($data);
}
 }

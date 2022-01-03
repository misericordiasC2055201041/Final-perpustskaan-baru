<?php
namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class BukuSeeder extends Seeder
{
public function run()
{
    $data = [
        [
        'kode' => 'C001',
        'judul' => 'Pemrograman Database dengan Delphi7 Menggunakan Access ADO',
        'slug' => 'pemrograman-database-dengan-delphi7-menggunakan-access-ado',
        'penulis' => 'Abdul Kadir',
        'penerbit' => 'Penerbit Andi',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C002',
        'judul' => 'ASnimasi Pendidikan Menggunakan Flash',
        'slug' => 'asnimasi-pendidikan-menggunakan-flash',
        'penulis' => 'Priyanto Hidayatullah',
        'penerbit' => 'Informatika',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C003',
        'judul' => 'Menguasai Efek Khusus dengan Photoshop',
        'slug' => 'menguasai-efek-khusus-dengan-photoshop',
        'penulis' => 'Junilee Enterprise',
        'penerbit' => 'Elex Media Komputindo',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C004',
        'judul' => 'Mudah dan Cepat Membuat Program Skripsi dengan VB 2012',
        'slug' => 'mudah-dan-cepat-membuat-program-skripsi-dengan-vb-2012',
        'penulis' => 'Ir. Yuniar Supardi',
        'penerbit' => 'Elex Media Komputindo',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C005',
        'judul' => 'the C++ Programming Language third edition',
        'slug' => 'the-c++-programming-language-third-edition',
        'penulis' => 'Bjarne Stroustrup',
        'penerbit' => 'AT&T Labs',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C006',
        'judul' => 'The Magic of Flash MX 2004',
        'slug' => 'the-magic-of-flash-mx-2004',
        'penulis' => 'Bernard Hardianto dan Ferdianto Wijaya',
        'penerbit' => 'PT Elex Media Komputindo',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C007',
        'judul' => 'Unity Internal Windows XP Professional',
        'slug' => 'unity-internal-windows-xp-professional',
        'penulis' => 'Ian Chandra K',
        'penerbit' => 'Elex Media Komputindo',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C008',
        'judul' => 'Seluk Beluk Database Relasional (Edisi Kedua)',
        'slug' => 'seluk-beluk-database-relasional-(edisi-kedua)',
        'penulis' => 'Mark Whitehorn dan Bill Marklyn',
        'penerbit' => 'Erlangga',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C009',
        'judul' => 'Sistem Operasi Microsoft Windows XP Professional',
        'slug' => 'sistem-operasi-microsoft-windows-xp-professional',
        'penulis' => 'Ian Chandra K',
        'penerbit' => 'Elex Media Komputindo',
        'created_at' => Time::now()
        ],
        [
        'kode' => 'C010',
        'judul' => 'Algoritma & Teknik Pemrograman',
        'slug' => 'algoritma-&-teknik-pemrograman',
        'penulis' => 'Budi Sutejo, Michael An',
        'penerbit' => 'ANDI',
        'created_at' => Time::now()
        ],
        [
            'kode' => 'C011',
            'judul' => 'Dasar Teknik Informatika',
            'slug' => 'dasar-dasar-teknik-informatika',
            'penulis' => 'Novega Pratama Adiputra',
            'penerbit' => 'Deepublish',
            'created_at' => Time::now()
            ],
            [
            'kode' => 'C012',
            'judul' => 'Metode Penelitian Teknik Informatika',
            'slug' => 'metode-penelitian-teknik-informatika',
            'penulis' => 'Ade Djohar Maturidi',
            'penerbit' => 'Deepublish',
            'created_at' => Time::now()
            ],
            [
            'kode' => 'C013',
            'judul' => 'Teknik Pengolahan Audio Video',
            'slug' => 'teknik-pengolahan-audio-video',
            'penulis' => 'Johnie Rogers Swanda Pasaribu, S.Kom., M.Kom.',
            'penerbit' => 'Dinas Pendidikan',
            'created_at' => Time::now()
            ],
            [
            'kode' => 'C014',
            'judul' => 'Pengantar Teknologi Informasi',
            'slug' => 'pengantar-teknologi-informasi',
            'penulis' => 'Buhori Muslim',
            'penerbit' => 'Deepublish',
            'created_at' => Time::now()
            ],
            [
            'kode' => 'C015',
            'judul' => 'Teknologi Informasi Di Pedesaaan',
            'slug' => 'teknologi-informasi-di-pedesaan',
            'penulis' => 'Hadis Turmudi, S.H., M.H.',
            'penerbit' => 'Deepublish',
            'created_at' => Time::now()
            ],
            [
            'kode' => 'C016',
            'judul' => 'Manajemen Proyek Teknologi Informasi',
            'slug' => 'manajemen-proyek-teknologi-informasi',
            'penulis' => 'Agus Suryanto Dan Anan Nugroho',
            'penerbit' => 'Deepublish',
            'created_at' => Time::now()
            ],
            [
            'kode' => 'C017',
            'judul' => 'Basis Data Konsep Dan Aplikasi',
            'slug' => 'basis-data-konsep-dan-aplikasi',
            'penulis' => 'Ika Oktavia Suzanti',
            'penerbit' => 'Deepublish',
            'created_at' => Time::now()
            ],
            [
            'kode' => 'C018',
            'judul' => 'Komputer Cerdas Untuk Mahasiswa Teknik Informatika',
            'slug' => 'komputer-cerdas-untuk-mahasiswa-teknik-informatika',
            'penulis' => 'Nur Nafi iyah ',
            'penerbit' => 'Deepublish',
            'created_at' => Time::now(),
            ],
            [
            'kode' => 'C019',
            'judul' => 'Pengantar Teknologi Informasi',
            'slug' => 'pengantar-teknologi-informasi',
            'penulis' => 'Edy Irwansyah Dan Jurike V. Moniaga',
            'penerbit' => 'Deepublish',
            'created_at' => Time::now()
            ],
            [
            'kode' => 'C020',
            'judul' => 'Pendidikan Teknologi Informasi Dan Komunikasi',
            'slug' => 'pendidikan-teknologi-informasi-dan-komunikasi',
            'penulis' => 'Dr. Deni Darmawan, S.Pd. M.S,',
            'penerbit' => 'PT. Remaja Rosdakarya',
            'created_at' => Time::now()
            ]
    ];
        
$this->db->table('buku')->insertBatch($data);
}
 }

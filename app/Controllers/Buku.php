<?php
namespace App\Controllers;
use App\Models\BukuModel;
class buku extends BaseController
{
 protected $buku;
 function __construct()
 {
 $this->buku = new BukuModel();
 }
 public function index()
 {
 $data['pageTitle'] = 'Daftar buku';
 $data['buku'] = $this->buku->findAll();
 return view('dashboard/buku', $data,);
 }

 public function create()
 {
 $data['pageTitle'] = 'Input Data Buku';
 return view('dashboard/buku_create', $data);
 }
public function store()
 {
 if (!$this->validate([
 'kode' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'judul' => [
    'rules' => 'required',
    'errors' => [
    'required' => '{field} Harus diisi'
    ]
 ],
 
 'penulis' => [
 'rules' => 'required',
 'errors' => [
 'required' => '{field} Harus diisi'
 ]
 ],
 'penerbit' => [
   'rules' => 'required',
   'errors' => [
   'required' => '{field} Harus diisi'
   ]
   ],
   'foto' => [
      'rules' =>
     'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,1024]',
      'errors' => [
      'uploaded' => 'Harus Ada File yang diupload',
      'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
      'max_size' => 'Ukuran File Maksimal 1 MB'
      ]
      ],
 ])) {
 session()->setFlashdata('error', $this->validator->listErrors());
 return redirect()->back()->withInput();
 }
 $filefoto = $this->request->getFile('foto');
 $namaFilefoto = $filefoto->getRandomName();
 $filefoto->move('img1', $namaFilefoto); 
 
 $this->buku->insert([
 'kode' => $this->request->getVar('kode'),
 'judul' => $this->request->getVar('judul'),
 'penulis' => $this->request->getVar('penulis'),
 'penerbit' => $this->request->getVar('penerbit'),
 'foto' => $namaFilefoto
 ]);
 session()->setFlashdata('message', 'Tambah Data Buku Berhasil');
 return redirect()->to('/buku');
 }

 function edit($kode)
 {
 $dataBuku = $this->buku->find($kode);
 if (empty($dataBuku)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
 }
 $data['pageTitle'] = 'Edit Data Buku';
 $data['buku'] = $dataBuku;
 return view('dashboard/buku_edit', $data);
 }

 public function update($kode)
 {
 if (!$this->validate([
   'kode' => [
      'rules' => 'required',
      'errors' => [
      'required' => '{field} Harus diisi'
      ]
      ],
      'judul' => [
         'rules' => 'required',
         'errors' => [
         'required' => '{field} Harus diisi'
         ]
      ],
      'penulis' => [
      'rules' => 'required',
      'errors' => [
      'required' => '{field} Harus diisi'
      ]
      ],
      'penerbit' => [
        'rules' => 'required',
        'errors' => [
        'required' => '{field} Harus diisi'
        ]
        ],
        'foto' => [
         'rules' =>
         'mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,1024]',
         'errors' => [
         'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
         'max_size' => 'Ukuran File Maksimal 1 MB'
         ]
         ],
 ])) {
 session()->setFlashdata('error', $this->validator->listErrors());
 return redirect()->back();
 }
//ambil nama fotolama dari variabel tipe hidden
$filefotolama = $this->request->getVar('fotolama');
//cek data file foto
$filefoto = $this->request->getFile('foto');
//jika file kosong jalankan perintah mengambil data nama file lama
if ($filefoto->getError() == 4) {
$namaFilefoto = $this->request->getVar('fotolama');
} else {
// jika tidak hapus file foto lama dan ambil data file foto baru
$path = '../public/img1/';
@unlink($path . $filefotolama);
//generate nama file random
$namaFilefoto = $filefoto->getRandomName();
//pindahkan gambar
$filefoto->move('img1', $namaFilefoto);
}


 $this->buku->update($kode, [
   'kode' => $this->request->getVar('kode'),
   'judul' => $this->request->getVar('judul'),
   'penulis' => $this->request->getVar('penulis'),
   'penerbit' => $this->request->getVar('penerbit'),
   'foto' => $namaFilefoto
 ]);
 session()->setFlashdata('message', 'Update Data Buku Berhasil');
 return redirect()->to('/buku');
 }

 function delete($kode)
 {
 $dataBuku = $this->buku->find($kode);
 if (empty($dataBuku)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
 }
 $this->buku->delete($kode);

 //hapus file image dari folder public
 $filefoto = $dataBuku->foto;
 $path = '../public/img1/';
 @unlink($path . $filefoto);

 session()->setFlashdata('message', 'Delete Data Buku Berhasil');
 return redirect()->to('/buku');
 }

 public function view($kode)
 {
 $dataBuku = $this->buku->find($kode);
 if (empty($dataBuku)) {
 throw new
\CodeIgniter\Exceptions\PageNotFoundException('Data Buku Tidak ditemukan !');
 }
 $data['pageTitle'] = 'Data Buku';
 $data['buku'] = $dataBuku;
 return view('dashboard/buku_view', $data);
 }
 }

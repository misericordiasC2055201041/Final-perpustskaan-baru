<?php
namespace App\Controllers;
use App\Models\TransaksiModel;
use App\Models\MahasiswaModel;
use App\Models\BukuModel;

class transaksi extends BaseController
{   
    function __construct() {
        $this->transaksi = new TransaksiModel();
        $this->mahasiswa = new MahasiswaModel();
        $this->buku      = new BukuModel();
    }

    public function index() 
    {
        $data['buku'] = $this->buku->getAll();
        $data['mahasiswa'] = $this->mahasiswa->getAll();
        $data['pageTitle'] = 'transaksi';
        $data['transaksi'] = $this->transaksi->findAll();
        return view('dashboard/transaksi', $data);
    }
    
    function pinjam()
    {
  
        $data['pageTitle'] = 'Data Peminjaman';
        $data['buku'] = $this->buku->getAll();
        $data['mahasiswa'] = $this->mahasiswa->getAll();
        $data['transaksi'] = $this->transaksi->findAll();
        return view('dashboard/peminjaman', $data);
    }

    public function create()
    {
        $data = $this->request->getpost();
        $lama_pinjam = 7; //7 hari
        $sekarang = date('Y-m-d H:i:s');
        $tanggal_kembali =  date('Y-m-d H:i:s', strtotime('+7 days'));
        $this->transaksi->insert([
            'kode_buku' => $this->request->getVar('kode_buku'),
            'nim_anggota' => $this->request->getVar('nim_anggota'),
            'tanggal_kembali' => $tanggal_kembali,
            'denda' => '0',
        ]);
        session()->setFlashdata('message', 'Pinjam buku Berhasil');
        return redirect()->to('/transaksi');
    }

    public function kembali($id)
    {
    if ($id) {
        $this->transaksi->update($id, [
        'tanggal_kembali' => date('Y-m-d H:i:s'),
        'status' => 'kembali',
        
        ]);    
        session()->setFlashdata('message', 'Kembali Buku Berhasil');
        return redirect()->to('/transaksi');

        }
    }

}

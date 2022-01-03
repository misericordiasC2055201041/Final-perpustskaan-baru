<?php
namespace App\Controllers;
use App\Models\BukuModel;
class Home extends BaseController
{   

 protected $buku;
 function __construct()
 {
 $this->buku = new BukuModel();
 }
 public function index()
 {
$data['pageTitle'] = 'Home';
$data['buku'] = $this->buku->findAll();
return view('dashboard/home', $data);
 }
}

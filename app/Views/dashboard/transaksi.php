<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">
<?php if (!empty(session()->getFlashdata('message'))) : ?>
 <div class="alert alert-success alert-dismissible fade show"
role="alert">
 <?php echo session()->getFlashdata('message'); ?>
 <button type="button" class="close" data-dismiss="alert" arialabel="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <?php endif; ?>
<!-- from tambah transaksi -->
<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>

<div class="card card-orange">
 <div class="card-header">
 <h3 class="card-title">Tansaksi Perpustakaan</h3>
 </div>
</div>
 <div class="row">
<div class="col-md-9 ms-md-auto position-relative m-auto border border-dark  bg-orange ">
    <p> </p>
 

<div class="form-group row">
<label for="kode" class="col-sm-2 col-formlabel">Kode Buku</label>
<form class="form-horizontal" method="post" action="<?= base_url('transaksi/create') ?>">
<?=csrf_field() ?>
 <div class="col-sm-5">
 <select name="kode_buku" class="from-control" REQUIRED=""> 
    <option value="" > Pilih Kode Buku </option>
    <?php if ($buku) : ?>
    <?php foreach ($buku as $lb) : ?>
        <option value="<?php echo $lb->kode?>"> <?php echo $lb->kode?> - <?php echo $lb->judul?> </option>
    <?php endforeach; ?>
    <?php endif; ?>
</select>
 </div>
</div>


<div class="form-group row">
<label for="nim" class="col-sm-2 col-formlabel">Nim Peminjam</label>
 <div class="col-sm-5">
 <select name="nim_anggota" class="from-control" REQUIRED=""> 
    <option value="" > Pilih Nim Anggota </option>
    <?php if ($mahasiswa) : ?>
    <?php foreach ($mahasiswa as $la) : ?>
        <option value="<?php echo $la->nim?>"> <?php echo $la->nim?> - <?php echo $la->nama?> </option>
    <?php endforeach; ?>
    <?php endif; ?>
</select>
 </div>
</div>
    
<div class="card-footer ">
 <button type="submit" class="btn btn-dark " value="create">Pinjam</button>
 </div>
    </from>
</div>
</div>

<?= $this->endSection('content'); ?>
<!-- end from transaksi --->
 <hr />

 <table class="table table-bordered text-center">
 <thead>
 <tr>
 <th>No</th>
 <th>kode buku</th>
 <th>Nim anggota</th>
 <th>tanggal pinjam</th>
 <th>tanggal kembali</th>
 <th>status</th>
 <th>aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $no = 1;
 foreach ($transaksi as $row) {
 ?>
 <tr>
 <td><?= $no++; ?></td>
 <td><?= $row->kode_buku; ?></td>
 <td><?= $row->nim_anggota; ?></td>
 <td><?= $row->tanggal_pinjam; ?> </td>
 <td><?= $row->tanggal_kembali; ?></td>
 <td><?= $row->status; ?> </td>
 <td>
     <?php if($row->status == "Dipinjam") : ?>
     <a href="<?php echo site_url() ?>/transaksi/kembali/<?php echo $row->id ?>">kembali </a>
     <?php else: ?>
        -
    <?php endif ?>
 </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>
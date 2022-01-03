<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-12">
 <!-- general form elements -->
 <section class="content">
 <div class="container-fluid">
 <div class="row">
 <!-- /.card-header -->
 <!-- form start -->
 <div class="col-md-3">
 <!-- Profile Image -->
 <div class="card card-orange card-outline">
 <div class="card-body box-profile">
 <div class="text-center">
 <img class=" img-fluid " src="/img1/<?= $buku->foto; ?>" alt="User profile picture">
 </div>
 </div>
 <!-- /.card-body -->
 </div>
 <!-- /.card -->
 </div>
 <div class="col-md-9">
 <div class="card card-orange">
 <div class="card-header">
 <h3 class="card-title">Rinci Buku</h3>
 </div>
 <!-- /.card-header -->
 <div class="card-body">
 <strong><i></i>Kode buku</strong>
 <p class="text-muted"><?= $buku->kode; ?> </p>
 <hr>
 <strong><i></i>Judul Buku</strong>
 <p class="text-muted"><?= $buku->judul;?></p>
 <hr>
 <strong><i></i>Penulis Buku</strong>
 <p class="text-muted"><?= $buku->penulis;
?></p>
<strong><i></i>Penerbit Buku</strong>
 <p class="text-muted"><?= $buku->penerbit;
?></p>
 </div>
 <!-- /.card-body -->
 </div>
 <!-- /.card -->
 </div>
 </div>
 <!-- /.card -->
 </div>
</div>
<?= $this->endSection('content'); ?>
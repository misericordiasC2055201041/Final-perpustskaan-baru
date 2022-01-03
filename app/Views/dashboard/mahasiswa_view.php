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
 <img class=" img-fluid" src="/img/<?= $mahasiswa->foto; ?>" alt="User profile picture">
 </div>
 </div>
 <!-- /.card-body -->
 </div>
 <!-- /.card -->
 </div>
 <div class="col-md-9">
 <div class="card card-orange">
 <div class="card-header">
 <h3 class="card-title">Data Anggota</h3>
 </div>
 <!-- /.card-header -->
 <div class="card-body">
 <strong><i></i>Nama  Mahasiswa</strong>
 <p class="text-muted"><?= $mahasiswa->nama; ?> ( <?= $mahasiswa->nim; ?> )</p>
 <hr>
 <strong><i></i>Jurusan</strong>
 <p class="text-muted"><?= $mahasiswa->jurusan;
?></p>
 <hr>
 <strong><i></i>Jenis Kelamin</strong>
 <p class="text-muted"><?= $mahasiswa->jenis_kelamin;
?></p>
 <hr>
 <strong><i></i>No Telpon / Email</strong>
 <p class="text-muted"><?= $mahasiswa->no_telp;?> /  <?= $mahasiswa->email;?></p>
 <hr>
 <strong><i></i>Alamat Mahasiswa</strong>
 <p class="text-muted"><?= $mahasiswa->alamat;
?></p>
</hr>
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
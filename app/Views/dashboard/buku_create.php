<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<div class="col-md-10">
 <!-- general form elements -->
 <div class="card card-orange">
 <div class="card-header">
 <h3 class="card-title">Tambah Data Buku</h3>
 </div>
 <!-- /.card-header -->
 <!-- form start -->
 <?php if (!empty(session()->getFlashdata('error'))) : ?>
 <div class="alert alert-light alert-dismissible fade show" role="alert">
 <h4 class="alert-heading">Periksa Entrian Form</h4>
 </hr />
 <?php echo session()->getFlashdata('error'); ?>
 <button type="button" class="close" data-dismiss="alert" arialabel="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <?php endif; ?>
 <form class="form-horizontal" method="post" action="<?=base_url('buku/store') ?>" enctype="multipart/form-data">
 <?= csrf_field(); ?>
 <div class="card-body">
 <div class="form-group row">
 <label for="kode" class="col-sm-2 col-formlabel">Kode Buku</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="kode"
name="kode" placeholder="Contoh C***" value="<?= old('kode'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="judul" class="col-sm-2 col-formlabel">Judul Buku</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="judul"
name="judul" value="<?= old('judul'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="penulis" class="col-sm-2 col-formlabel">Nama Penulis</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="penulis"
name="penulis" value="<?= old('penulis'); ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="penerbit" class="col-sm-2 col-formlabel">Penerbit Buku</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" id="penerbit"
name="penerbit" value="<?= old('penerbit'); ?>">
 </div>
 </div>

 <div class="form-group row">
 <label for="foto" class="col-sm-2 col-form-label">Sampul Buku</label>
 <div class="custom-file col-sm-6">
 <input type="file" class="custom-file-input" id="foto" name="foto">
 <label class="custom-file-label" for="foto">Pilih Sampul Buku</label>
 </div>
 </div>

 </div>
 <!-- /.card-body -->
 <div class="card-footer">
 <button type="submit" class="btn btn-dark">Simpan</button>
 </div>
 <!-- /.card-footer -->
 </form>
 </div>
 <!-- /.card -->
</div>
<?= $this->endSection('content'); ?>
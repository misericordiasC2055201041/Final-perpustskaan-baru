<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
Content Di sini untuk Home Admin

<!-- /.card-header -->
<div class="card-body">
 <?php if (!empty(session()->getFlashdata('message'))) : ?>
 <div class="alert alert-success alert-dismissible fade show" role="alert">
 <?php echo session()->getFlashdata('message'); ?>
 <button type="button" class="close" data-dismiss="alert" arialabel="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>
 <?php endif; ?>
 <hr />
<h1>Daftar Buku</h1>
<div class="content">
<div class="container">
<div class="row">
 <?php
 $no = 1;
 foreach ($buku as $row) {
 ?>
<div class="col-lg-4">
    <div class="card bg-orange border border-dark ">
        <div class="card-body text-center ">

        <h5 class="card-title"><?= $row->kode; ?></h5>
            <p class="card-text">
            <img class="img-fluid " src="/img1/<?= $row->foto; ?>" width="150px" height="150px">
            </p>

            <label>
            <label><?= $row->judul; ?></label>

        <p>
            <td><a title="View" href="<?=base_url("buku/view/$row->kode"); ?>" 
            class="btn btn-dark">Detail</a> </td></p>
 </div>
 </div>
 </div>
<?php
 }
 ?> 
</div>
 </div>
 </div>
 
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>
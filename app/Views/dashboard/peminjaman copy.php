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
<label for="kode" class="col-sm-6 col-formlabel">Kode Buku</label>
 <div class="col-sm-5">
 <select name="kode" class="from-control" REQUIRED=""> 
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
<label for="nim" class="col-sm-6 col-formlabel">Nim Peminjam</label>
 <div class="col-sm-5">
 <select name="nim" class="from-control" REQUIRED=""> 
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
 <button type="submit" class="btn btn-dark  ">Pinjam</button>
 </div>

</div>
</div>



<?= $this->endSection('content'); ?>
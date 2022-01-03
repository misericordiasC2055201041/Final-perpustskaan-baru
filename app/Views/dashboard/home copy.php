<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
Content Di sini untuk Home Admin
<?= $this->endSection('content'); ?>

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
 <table class="table table-bordered">
 <thead>
 <tr>
    <h1>Daftar Buku</h1>
 <th>No</th>
 <th>kode</th>
 <th>judul</th>
 <th>Detail</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $no = 1;
 foreach ($buku as $row) {
 ?>
 <tr>
 <td><?= $no++; ?></td>
 <td><?= $row->kode; ?></td>
 <td><?= $row->judul; ?></td>
 <td>
 <a title="View" href="<?=base_url("buku/view/$row->kode"); ?>" class="btn btn-dark">Detail</a> </td>
 </tr>
 <?php
 }
 ?>
 </tbody>
 </table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?><?= $this->extend('layout/dashboard-layout'); ?>
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
 <?php
 $no = 1;
 foreach ($buku as $row) {
 ?>
<div class="row">
<div class="col-md-3 ms-md-auto col-sm-6 col-xs-12 position-relative m-3 border border-dark  bg-orange text-center">
 <p><td>No : <?= $no++; ?></td> </p>
 <p><td>Kode Buku : <?= $row->kode; ?></td></p>
 <p><td>Judul Buku : <?= $row->judul; ?></td></p>
 <p><td><a title="View" href="<?=base_url("buku/view/$row->kode"); ?>" class="btn btn-dark">Detail</a> </td></p>
 </div>
 </div>
 <?php
 }
 ?>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>



<!--- contoh submit
$submit =  $this->transaksi->post('submit', TRUE);
        if ($submit) {
            // tambah tanggal
            $lama_pinjam = 7; //7 hari
            $sekarang = date('Y-m-d H:i:s');
            $tanggal_kembali =  date('Y-m-d H:i:s', strtotime('+7 days'));
            $data = array (
                'kode_buku' => $this->input->post('kod_buku', true),
                'nim_anggota' => $this->input->post('nim_anggota', true),
                'tanggal_kembali' => $tanggal_kembali,
                'denda' => '0',
            );
            $this->TransaksiModel->insert($data);
            $this->session()->setFlashdata('message', 'Pinjam selesai');
            redirect(site_url('transaksi'));
        }
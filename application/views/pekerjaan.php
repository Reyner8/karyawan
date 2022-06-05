<?php $this->load->view('inc/header') ?>
<?php $this->load->view('inc/navbar') ?>
<div class="container">
   <div class="row">
      <div class="col-md-4 mt-4">
         <div class="card">
            <div class="card-body">
               <form action="<?= base_url('pekerjaan/insert') ?>" method="POST">

                  <div class="mb-3">
                     <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                     <input type="text" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" name="nama_perusahaan" value="<?= set_value('nama_perusahaan') ?>">
                     <?= form_error('nama_perusahaan', '<div class="text-danger">', '</div>'); ?>

                  </div>
                  <div class="mb-3">
                     <label for="posisi_terakhir" class="form-label">Posisi Terakhir</label>
                     <input type="text" class="form-control" id="posisi_terakhir" placeholder="Posisi Terakhir" name="posisi_terakhir" value="<?= set_value('posisi_terakhir') ?>">
                     <?= form_error('posisi_terakhir', '<div class="text-danger">', '</div>'); ?>

                  </div>
                  <div class="mb-3">
                     <label for="pendapatan_terakhir" class="form-label">Pendapatan Terakhir</label>
                     <input type="text" class="form-control" id="pendapatan_terakhir" placeholder="Pendapatan Terakhir" name="pendapatan_terakhir" value="<?= set_value('pendapatan_terakhir') ?>">
                     <?= form_error('pendapatan_terakhir', '<div class="text-danger">', '</div>'); ?>

                  </div>
                  <div class="mb-3">
                     <label for="tahun" class="form-label">Tahun</label>
                     <input type="year" class="form-control" id="tahun" placeholder="Tahun" name="tahun" value="<?= set_value('tahun') ?>">
                     <?= form_error('tahun', '<div class="text-danger">', '</div>'); ?>
                  </div>

                  <button class="btn btn-primary">SUBMIT</button>
               </form>
            </div>
         </div>
      </div>
      <div class="col-md-8 mt-4 text-center">
         <div class="card">
            <div class="card-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Posisi Terakhir</th>
                        <th scope="col">Pendapatan Terakhir</th>
                        <th scope="col">Tahun</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $d) : ?>
                        <tr>
                           <td><?= $d->nama_perusahaan ?></td>
                           <td><?= $d->posisi_terakhir ?></td>
                           <td><?= $d->pendapatan_terakhir ?></td>
                           <td><?= $d->tahun ?></td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>


   </div>

   <?php $this->load->view('inc/footer') ?>
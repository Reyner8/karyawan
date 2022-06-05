<?php $this->load->view('inc/header') ?>
<?php $this->load->view('inc/navbar') ?>
<div class="container">
   <div class="row">
      <div class="col-md-4 mt-4">
         <div class="card">
            <div class="card-body">
               <form action="<?= base_url('pelatihan/insert') ?>" method="POST">

                  <div class="mb-3">
                     <label for="nama_pelatihan" class="form-label">Nama Pelatihan</label>
                     <input type="text" class="form-control" id="nama_pelatihan" placeholder="Nama Perusahaan" name="nama_pelatihan" value="<?= set_value('nama_pelatihan') ?>">
                     <?= form_error('nama_pelatihan', '<div class="text-danger">', '</div>'); ?>

                  </div>
                  <div class="mb-3">
                     <label for="sertifikat" class="form-label">Sertifikat</label>

                     <select name="sertifikat" class="form-control">
                        <option value="ada">ADA</option>
                        <option value="tidak">TIDAK</option>
                     </select>

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
                        <th scope="col">Nama Pelatihan</th>
                        <th scope="col">Sertifikat</th>
                        <th scope="col">Tahun</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $d) : ?>
                        <tr>
                           <td><?= $d->nama_pelatihan ?></td>
                           <td><?= $d->sertifikat ?></td>
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
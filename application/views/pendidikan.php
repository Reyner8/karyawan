<?php $this->load->view('inc/header') ?>
<?php $this->load->view('inc/navbar') ?>
<div class="container">
   <div class="row">
      <div class="col-md-4 mt-4">
         <div class="card">
            <div class="card-body">
               <form action="<?= base_url('pendidikan/insert') ?>" method="POST">

                  <div class="mb-3">
                     <label for="jenjang_pendidikan" class="form-label">Jenjang Pendidikan</label>
                     <input type="text" class="form-control" id="jenjang_pendidikan" placeholder="Jenjang Pendidikan" name="jenjang_pendidikan" value="<?= set_value('jenjang_pendidikan') ?>">
                     <?= form_error('jenjang_pendidikan', '<div class="text-danger">', '</div>'); ?>

                  </div>
                  <div class="mb-3">
                     <label for="nama_institusi" class="form-label">Nama Institusi</label>
                     <input type="text" class="form-control" id="nama_institusi" placeholder="Nama Institusi" name="nama_institusi" value="<?= set_value('nama_institusi') ?>">
                     <?= form_error('nama_institusi', '<div class="text-danger">', '</div>'); ?>

                  </div>
                  <div class="mb-3">
                     <label for="jurusan" class="form-label">Jurusan</label>
                     <input type="text" class="form-control" id="jurusan" placeholder="Jurusan" name="jurusan" value="<?= set_value('jurusan') ?>">
                     <?= form_error('jurusan', '<div class="text-danger">', '</div>'); ?>

                  </div>
                  <div class="mb-3">
                     <label for="tahun_lulus" class="form-label">Tahun Lulus</label>
                     <input type="year" class="form-control" id="tahun_lulus" placeholder="Tahun Lulus" name="tahun_lulus" value="<?= set_value('tahun_lulus') ?>">
                     <?= form_error('tahun_lulus', '<div class="text-danger">', '</div>'); ?>
                  </div>
                  <div class="mb-3">
                     <label for="ipk" class="form-label">IPK</label>
                     <input type="year" class="form-control" id="ipk" placeholder="IPK" name="ipk" value="<?= set_value('ipk') ?>">
                     <?= form_error('ipk', '<div class="text-danger">', '</div>'); ?>
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
                        <th scope="col">Jenjang Pendidikan</th>
                        <th scope="col">Nama Institusi</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tahun Lulus</th>
                        <th scope="col">IPK</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $d) : ?>
                        <tr>
                           <td><?= $d->jenjang_pendidikan ?></td>
                           <td><?= $d->nama_institusi ?></td>
                           <td><?= $d->jurusan ?></td>
                           <td><?= $d->tahun_lulus ?></td>
                           <td><?= $d->ipk ?></td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>


   </div>

   <?php $this->load->view('inc/footer') ?>
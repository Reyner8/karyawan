<?php $this->load->view('inc/header') ?>
<?php $this->load->view('inc/navbar') ?>
<div class="container">
   <div class="row">

      <div class="col-md-6 mt-4 text-center">
         <div class="card">
            <div class="card-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">Posisi Dilamar</th>
                        <th scope="col">Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($data as $d) : ?>
                        <tr>
                           <td><?= $d->nama ?></td>
                           <td><?= $d->tempat_lahir . ', ' . date('d-m-Y', strtotime($d->tanggal_lahir)) ?></td>
                           <td><?= $d->posisi_lamar ?></td>
                           <td>
                              <a href="<?= base_url('admin/dashboard/detail/' . $d->id) ?>">Detail</a>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>


   </div>

   <?php $this->load->view('inc/footer') ?>
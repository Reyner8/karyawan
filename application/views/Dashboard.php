<?php $this->load->view('inc/header') ?>
<?php $this->load->view('inc/navbar') ?>
<div class="container">
   <div class="row">
      <div class="col-md-12 mt-4 text-center">
         <h1>DATA PRIBADI PELAMAR</h1>
      </div>
      <div class="col-md-12 my-5">
         <form method="POST" action="<?= base_url('dashboard/update') ?>">
            <div class="mb-3 row">
               <label for="posisi_lamar" class="col-sm-2 col-form-label">POSISI YANG DILAMAR</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="posisi_lamar" value="<?= $data->posisi_lamar ?>" name="posisi_lamar">
                  <div class="form-text text-danger">
                     <?= form_error('posisi_lamar'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" value="<?= $data->nama ?>" name="nama">
                  <div class="form-text text-danger">
                     <?= form_error('nama'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="no_ktp" class="col-sm-2 col-form-label">NO KTP</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_ktp" value="<?= $data->no_ktp ?>" name="no_ktp">
                  <div class="form-text text-danger">
                     <?= form_error('no_ktp'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="tempat" class="col-sm-2 col-form-label">Tempat Lahir</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="tempat" value="<?= $data->tempat_lahir ?>" name="tempat_lahir">
                  <div class="form-text text-danger">
                     <?= form_error('tempat'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
               <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" name="tanggal_lahir">
                  <div class="form-text text-danger">
                     <?= form_error('tanggal_lahir'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="jk" class="col-sm-2 col-form-label">JENIS KELAMIN</label>
               <div class="col-sm-10">
                  <select class="form-select form-select-sm  " name="jk">
                     <?php if ($data->jenis_kelamin == 'p') : ?>
                        <option selected value="p">LAKI-LAKI</option>
                        <option value="W">PEREMPUAN</option>
                     <?php elseif ($data->jenis_kelamin == 'w') : ?>
                        <option value="p">LAKI-LAKI</option>
                        <option selected value="W">PEREMPUAN</option>
                     <?php else : ?>
                        <option value="p">LAKI-LAKI</option>
                        <option value="W">PEREMPUAN</option>
                     <?php endif; ?>
                  </select>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="agama" class="col-sm-2 col-form-label">AGAMA</label>
               <div class="col-sm-10">
                  <select class="form-select form-select-sm  " name="agama">
                     <?php if ($data->agama == 'katolik') : ?>
                        <option selected value="katolik">KATOLIK</option>
                        <option value="protestan">PROTESTAN</option>
                        <option value="islam">ISLAM</option>
                        <option value="hindu">HINDU</option>
                        <option value="buddha">BUDDHA</option>
                        <option value="khonghucu">KHONGHUCU</option>
                     <?php elseif ($data->agama == 'protestan') : ?>
                        <option value="katolik">KATOLIK</option>
                        <option selected value="protestan">PROTESTAN</option>
                        <option value="islam">ISLAM</option>
                        <option value="hindu">HINDU</option>
                        <option value="buddha">BUDDHA</option>
                        <option value="khonghucu">KHONGHUCU</option>
                     <?php elseif ($data->agama == 'islam') : ?>
                        <option value="katolik">KATOLIK</option>
                        <option value="protestan">PROTESTAN</option>
                        <option selected value="islam">ISLAM</option>
                        <option value="hindu">HINDU</option>
                        <option value="buddha">BUDDHA</option>
                        <option value="khonghucu">KHONGHUCU</option>
                     <?php elseif ($data->agama == 'hindu') : ?>
                        <option value="katolik">KATOLIK</option>
                        <option value="protestan">PROTESTAN</option>
                        <option value="islam">ISLAM</option>
                        <option selected value="hindu">HINDU</option>
                        <option value="buddha">BUDDHA</option>
                        <option value="khonghucu">KHONGHUCU</option>
                     <?php elseif ($data->agama == 'buddha') : ?>
                        <option value="katolik">KATOLIK</option>
                        <option value="protestan">PROTESTAN</option>
                        <option value="islam">ISLAM</option>
                        <option value="hindu">HINDU</option>
                        <option selected value="buddha">BUDDHA</option>
                        <option value="khonghucu">KHONGHUCU</option>
                     <?php elseif ($data->agama == 'konghucu') : ?>
                        <option value="katolik">KATOLIK</option>
                        <option value="protestan">PROTESTAN</option>
                        <option value="islam">ISLAM</option>
                        <option value="hindu">HINDU</option>
                        <option value="buddha">BUDDHA</option>
                        <option selected value="khonghucu">KHONGHUCU</option>
                     <?php else : ?>
                        <option value="katolik">KATOLIK</option>
                        <option value="protestan">PROTESTAN</option>
                        <option value="islam">ISLAM</option>
                        <option value="hindu">HINDU</option>
                        <option value="buddha">BUDDHA</option>
                        <option value="khonghucu">KHONGHUCU</option>
                     <?php endif; ?>

                  </select>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="golongan_darah" class="col-sm-2 col-form-label">GOLONGAN DARAH</label>
               <div class="col-sm-10">
                  <select class="form-select form-select-sm" name="golongan_darah">
                     <?php if ($data->agama == 'a') : ?>
                        <option selected value="a">A</option>
                        <option value="b">B</option>
                        <option value="ab">AB</option>
                        <option value="o">O</option>
                     <?php elseif ($data->agama == 'b') : ?>
                        <option value="a">A</option>
                        <option selected value="b">B</option>
                        <option value="ab">AB</option>
                        <option value="o">O</option>
                     <?php elseif ($data->agama == 'ab') : ?>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option selected value="ab">AB</option>
                        <option value="o">O</option>
                     <?php elseif ($data->agama == '0') : ?>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="ab">AB</option>
                        <option selected value="o">O</option>
                     <?php else : ?>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="ab">AB</option>
                        <option value="o">O</option>
                     <?php endif; ?>
                  </select>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="status" class="col-sm-2 col-form-label">STATUS</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="status" value="<?= $data->status ?>" name="status">
                  <div class="form-text text-danger">
                     <?= form_error('status'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="alamat_ktp" class="col-sm-2 col-form-label">ALAMAT KTP</label>
               <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="alamat_ktp" name="alamat_ktp"><?= $data->alamat_ktp ?></textarea>
                  <div class="form-text text-danger">
                     <?= form_error('alamat_ktp'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="alamat_tinggal" class="col-sm-2 col-form-label">ALAMAT TINGGAL</label>
               <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="alamat_tinggal" name="alamat_tinggal"><?= $data->alamat_tinggal ?></textarea>
                  <div class="form-text text-danger">
                     <?= form_error('alamat_tinggal'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="email" class="col-sm-2 col-form-label">EMAIL</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" value="<?= $data->email ?>" name="email">
                  <div class="form-text text-danger">
                     <?= form_error('email'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="no_telp" class="col-sm-2 col-form-label">NO TELP</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_telp" value="<?= $data->no_telp ?>" name="no_telp">
                  <div class="form-text text-danger">
                     <?= form_error('no_telp'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="no_telp_terdekat" class="col-sm-2 col-form-label">ORANG TERDEKAT YANG DAPAT DIHUBUNGI</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_telp_terdekat" value="<?= $data->no_telp_terdekat ?>" name="no_telp_terdekat">
                  <div class="form-text text-danger">
                     <?= form_error('no_telp_terdekat'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="skill" class="col-sm-2 col-form-label">SKILL</label>
               <div class="col-sm-10">
                  <textarea type="text" class="form-control" id="skill" name="skill"><?= $data->skill ?></textarea>
                  <div class="form-text text-danger">
                     <?= form_error('skill'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="penghasilan" class="col-sm-2 col-form-label">PENGHASILAN YANG DIHARAPKAN</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="penghasilan" value="<?= $data->penghasilan ?>" name="penghasilan">
                  <div class="form-text text-danger">
                     <?= form_error('penghasilan'); ?>
                  </div>
               </div>
            </div>
            <div class="mb-3 row">
               <label for="penempatan" class="col-sm-2 col-form-label">BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN</label>
               <div class="col-sm-10">
                  <select class="form-select form-select-sm  " name="penempatan">
                     <?php if ($data->penempatan == 'ya') : ?>
                        <option selected value="ya">YA</option>
                        <option value="tidak">TIDAK</option>
                     <?php elseif ($data->penempatan == 'ya') : ?>
                        <option value="ya">YA</option>
                        <option selected value="tidak">TIDAK</option>
                     <?php else : ?>
                        <option value="ya">YA</option>
                        <option value="tidak">TIDAK</option>
                     <?php endif; ?>
                  </select>
               </div>
            </div>

            <button class="btn btn-primary">SUBMIT</button>
         </form>
      </div>
   </div>

   <?php $this->load->view('inc/footer') ?>
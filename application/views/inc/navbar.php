<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <?php $role = $this->session->userdata('role') ?>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
            <?php if ($role == 'user') : ?>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= base_url('dashboard') ?>">Dashboard</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= base_url('pendidikan') ?>">Pendidikan</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= base_url('pekerjaan') ?>">Riwayat Pekerjaan</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= base_url('pelatihan') ?>">Riwayat Pelatihan</a>
               </li>

            <?php else : ?>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
               </li>
         </ul>
      <?php endif; ?>
      </div>
      <a class="btn btn-primary" href="<?= base_url('auth/signout') ?>">Sign-Out</a>
   </div>
</nav>
<?php

class Dashboard extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('AdminModel');
   }

   public function index()
   {
      $idUser = $this->session->userdata('idUser');
      $data = ['data' => $this->AdminModel->getBiodata($idUser)];
      $this->load->view('admin/dashboard', $data);
   }

   public function detail($idUser)
   {

      $data = [
         'data' => $this->AdminModel->getBiodataRow($idUser),
         'pendidikan_terakhir' => $this->AdminModel->getPendidikan($idUser),
         'riwayat_pelatihan' => $this->AdminModel->getPelatihan($idUser),
         'riwayat_pekerjaan' => $this->AdminModel->getPekerjaan($idUser),
      ];
      $this->load->view('admin/detail', $data);
   }
}

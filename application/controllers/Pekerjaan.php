<?php

class Pekerjaan extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('BiodataModel');
      $this->load->library('form_validation');
   }


   public function index()
   {
      $idUser = $this->session->userdata('idUser');
      $data = ['data' => $this->BiodataModel->getPekerjaan($idUser)];
      $this->load->view('pekerjaan', $data);
   }

   public function insert()
   {
      $idUser = $this->session->userdata('idUser');
      $this->form_validation->set_rules('nama_perusahaan', 'nama perusahaan', 'required');
      $this->form_validation->set_rules('posisi_terakhir', 'posisi_terakhir', 'required');
      $this->form_validation->set_rules('pendapatan_terakhir', 'pendapatan_terakhir', 'required|numeric');
      $this->form_validation->set_rules('tahun', 'tahun', 'required|numeric|max_length[4]');

      if ($this->form_validation->run()) {

         $data = [
            'id_user' => $idUser,
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'posisi_terakhir' => $this->input->post('posisi_terakhir'),
            'pendapatan_terakhir' => $this->input->post('pendapatan_terakhir'),
            'tahun' => $this->input->post('tahun'),
         ];
         $this->db->insert('riwayat_pekerjaan', $data);
         redirect('pekerjaan');
      } else {

         $data = ['data' => $this->BiodataModel->getPekerjaan($idUser)];
         $this->load->view('pekerjaan', $data);
      }
   }
}

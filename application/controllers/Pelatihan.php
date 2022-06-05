<?php

class Pelatihan extends CI_Controller
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
      $data = ['data' => $this->BiodataModel->getPelatihan($idUser)];
      $this->load->view('pelatihan', $data);
   }

   public function insert()
   {
      $idUser = $this->session->userdata('idUser');
      $this->form_validation->set_rules('nama_pelatihan', 'nama pelatihan', 'required');
      $this->form_validation->set_rules('sertifikat', 'sertifikat', 'required');
      $this->form_validation->set_rules('tahun', 'tahun', 'required|numeric|max_length[4]');
      if ($this->form_validation->run()) {

         $data = [
            'id_user' => $idUser,
            'nama_pelatihan' => $this->input->post('nama_pelatihan'),
            'sertifikat' => $this->input->post('sertifikat'),
            'tahun' => $this->input->post('tahun'),
         ];
         $this->db->insert('riwayat_pelatihan', $data);
         redirect('pelatihan');
      } else {

         $data = ['data' => $this->BiodataModel->getPelatihan($idUser)];
         $this->load->view('pelatihan', $data);
      }
   }
}

<?php

class Pendidikan extends CI_Controller
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
      $data = ['data' => $this->BiodataModel->getPendidikan($idUser)];
      $this->load->view('pendidikan', $data);
   }

   public function insert()
   {
      $idUser = $this->session->userdata('idUser');
      $this->form_validation->set_rules('jenjang_pendidikan', 'jenjang pendidikan', 'required');
      $this->form_validation->set_rules('nama_institusi', 'nama_institusi', 'required');
      $this->form_validation->set_rules('jurusan', 'jurusan', 'required');
      $this->form_validation->set_rules('tahun_lulus', 'tahun lulus', 'required|numeric|max_length[4]');
      $this->form_validation->set_rules('ipk', 'tempat lahir', 'required|numeric');
      if ($this->form_validation->run()) {

         $data = [
            'id_user' => $idUser,
            'jenjang_pendidikan' => $this->input->post('jenjang_pendidikan'),
            'nama_institusi' => $this->input->post('nama_institusi'),
            'jurusan' => $this->input->post('jurusan'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),
            'ipk' => $this->input->post('ipk'),
         ];
         $this->db->insert('pendidikan_terakhir', $data);
         redirect('pendidikan');
      } else {

         $data = ['data' => $this->BiodataModel->getPendidikan($idUser)];
         $this->load->view('pendidikan', $data);
      }
   }
}

<?php

class Dashboard extends CI_Controller
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
      $data = ['data' => $this->BiodataModel->getBiodata($idUser)];
      $this->load->view('dashboard', $data);
   }

   public function update()
   {
      $idUser = $this->session->userdata('idUser');
      $this->form_validation->set_rules('posisi_lamar', 'posisi_lamar', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('no_ktp', 'no ktp', 'required|max_length[16]');
      $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required');
      $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required');
      $this->form_validation->set_rules('status', 'status', 'required');
      $this->form_validation->set_rules('alamat_ktp', 'alamat ktp', 'required');
      $this->form_validation->set_rules('alamat_tinggal', 'alamat tinggal', 'required');
      $this->form_validation->set_rules('email', 'email', 'required|valid_email');
      $this->form_validation->set_rules('no_telp', 'no telp', 'required|max_length[13]');
      $this->form_validation->set_rules('no_telp_terdekat', 'no telp terdekat', 'required|max_length[13]');
      $this->form_validation->set_rules('skill', 'skill', 'required');
      $this->form_validation->set_rules('penghasilan', 'penghasilan', 'required');
      if ($this->form_validation->run()) {

         $data = [
            'posisi_lamar' => $this->input->post('posisi_lamar'),
            'nama' => $this->input->post('nama'),
            'no_ktp' => $this->input->post('no_ktp'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jk'),
            'agama' => $this->input->post('agama'),
            'golongan_darah' => $this->input->post('golongan_darah'),
            'status' => $this->input->post('status'),
            'alamat_ktp' => $this->input->post('alamat_ktp'),
            'alamat_tinggal' => $this->input->post('alamat_tinggal'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp'),
            'no_telp_terdekat' => $this->input->post('no_telp_terdekat'),
            'skill' => $this->input->post('skill'),
            'penempatan' => $this->input->post('penempatan'),
            'penghasilan' => $this->input->post('penghasilan'),
         ];
         $this->db->update('user', $data, ['id' => $idUser]);
         redirect('dashboard');
      } else {
         $idUser = $this->session->userdata('idUser');
         $data = ['data' => $this->BiodataModel->getBiodata($idUser)];
         $this->load->view('dashboard', $data);
      }
   }
}

<?php

class Auth extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('AuthModel');
      $this->load->library('form_validation');
   }

   public function index()
   {
      $role = $this->session->userdata('role');
      if ($role == 'admin') {
         redirect('admin/dashboard');
      } elseif ($role == 'user') {
         redirect('dashboard');
      } else {
         $this->load->view('signin');
      }
   }

   public function signin()
   {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');

      $checkAdmin = $this->AuthModel->signin('admin', ['username' => $email]);
      $checkUser = $this->AuthModel->signin('user', ['email' => $email]);

      if ($this->form_validation->run()) {
         if (password_verify($password, $checkAdmin->password)) {
            $this->session->set_userdata(['role' => 'admin']);
            redirect('admin/dashboard');
         } elseif (password_verify($password, $checkUser->password)) {
            $this->session->set_userdata([
               'idUser' => $checkUser->id,
               'role' => 'user',
            ]);
            redirect('dashboard');
         } else {
            redirect('auth');
         }
      } else {
         $this->load->view('signin');
      }
   }

   public function signupPage()
   {
      $this->load->view('signup');
   }

   public function signup()
   {

      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');
      if ($this->form_validation->run()) {
         $this->AuthModel->signup('user', [
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
         ]);
         redirect('auth');
      } else {
         $this->load->view('signup');
      }
   }

   public function signout()
   {
      $this->session->sess_destroy();
      redirect('auth');
   }
}

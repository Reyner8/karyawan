<?php

class BiodataModel extends CI_Model
{

   public function getBiodata($idUser)
   {
      $this->db->from('user');
      $this->db->where(['id' =>  $idUser]);
      return $this->db->get()->row();
   }

   public function getPendidikan($idUser)
   {
      $this->db->from('pendidikan_terakhir');
      $this->db->where(['id_user' =>  $idUser]);
      return $this->db->get()->result();
   }



   public function getPekerjaan($idUser)
   {
      $this->db->from('riwayat_pekerjaan');
      $this->db->where(['id_user' =>  $idUser]);
      return $this->db->get()->result();
   }

   public function getPelatihan($idUser)
   {
      $this->db->from('riwayat_pelatihan');
      $this->db->where(['id_user' =>  $idUser]);
      return $this->db->get()->result();
   }
}

<?php

class AuthModel extends CI_Model
{

   public function signin($table, $where)
   {
      $this->db->from($table);
      $this->db->where($where);
      return $this->db->get()->row();
   }

   public function signup($table, $data)
   {
      $this->db->insert($table, $data);
   }
}

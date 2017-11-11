<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

  public function getLogin($userEmail, $userPassword)
  {
    $pwd = md5($userPassword);
    $this->db->where("ContactPersonEmail", $userEmail);
    $this->db->where("ContactPersonPassword", $pwd);
    $query = $this->db->get("CpContactPerson");
    if($query->num_rows() > 0)
    {
      foreach ($query->result() as $row) {
        # code...
        $session = array('ContactPersonEmail' => $row->ContactPersonEmail,
                           'ContactPersonName' => $row->ContactPersonName,
                           'ContactPersonAddress' => $row->ContactPersonAddress,
                           'ContactPersonEmail' => $row->ContactPersonEmail);
        $this->session->set_userdata($session);
        redirect('home');
      }
    }
    else
    {
      $this->session->set_flashdata('info', 'Sorry your data not found');
      redirect('login');
    }
  }
}

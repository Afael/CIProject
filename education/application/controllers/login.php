<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}

  public function getLogin()
  {
    $userEmail = $this->input->post("userEmail");
    $userPassword = $this->input->post("userPassword");
    $this->load->model("login_model");
    $this->login_model->getLogin($userEmail, $userPassword);
  }
}

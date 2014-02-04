<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends MY_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function login() {
    $this->load->view('admin/authentication/login');
  }

  public function authenticate() {

    $user = $this->user_model->get_by(array(
      'user' => $this->input->post('user')
      ));

    if($user && $this->bcrypt->check_password($this->input->post('pass'), $user['pass'])) {

      $this->session->set_userdata('user_id',$user['id']);
      $this->session->set_flashdata('success', 'Login Successful.');
      redirect('/admin/leads');

    } else {

      $this->session->unset_userdata();
      $this->session->set_flashdata('error', 'Incorrect Login Credentials.');
      redirect('/admin/authentication/login');

    }

  }

  public function logout() {

    $this->session->sess_destroy();
    redirect('/admin/authentication/login');

  }


}
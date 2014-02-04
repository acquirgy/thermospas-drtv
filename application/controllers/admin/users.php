<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {

    $data['users'] = $this->user_model->get_all();
    $this->load->view('admin/users/index', $data);
  }

  public function edit($id) {

    $data['user'] = $this->user_model->get($id);
    $this->load->view('admin/users/edit', $data);

  }

  public function update($id) {

    $result = $this->user_model->update($id, $this->input->post());

    if(!$result) {

      $this->session->set_flashdata('error', validation_errors());

    } else {

      $this->session->set_flashdata('success', 'User Updated.');
      redirect('admin/users');

    }

  }

  public function edit_password($id) {

    $data['user'] = $this->user_model->get($id);
    $this->load->view('admin/users/edit_password', $data);
  }

  public function update_password($id) {

    $pass = $this->input->post('pass');
    if($pass) {
      $hash = $this->bcrypt->hash_password($pass);
      $this->user_model->update($id, array('pass' => $hash) );
    }
    $this->session->set_flashdata('success', 'Password Updated.');
    redirect('/admin/users/edit/' . $id);

  }

  public function new_user() {

    $this->load->view('admin/users/new_user');
  }

  public function insert_user() {

    $hash = $this->bcrypt->hash_password($this->input->post('pass'));
    $this->user_model->insert(array('user'=> $this->input->post('user'), 'pass'=>$hash));
    $this->session->set_flashdata('success', 'User Added.');
    redirect('admin/users');

  }

  public function destroy($id) {

    $destory_user = $this->user_model->delete($id);

    redirect('admin/users');

  }

}
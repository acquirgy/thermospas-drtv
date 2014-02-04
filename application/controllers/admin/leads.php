<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends MY_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['leads'] = $this->lead_model->get_all();

   $this->load->view('admin/leads', $data);
  }

}
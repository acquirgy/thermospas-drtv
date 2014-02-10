<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Leads extends MY_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['leads'] = $this->lead_model->get_all();

    $this->load->view('admin/leads', $data);
  }

  public function filtered() {
    $start = $this->input->post('dateStart');
    $end = $this->input->post('dateEnd');

    if ($start > 0 && $end > 0) {
      $data['leads'] = $this->lead_model->get_many_by(array('date >=' => $start, 'date <' => $end));
    } else {
      $data['leads'] = $this->lead_model->get_all();
    }

    $this->load->view('admin/leads', $data);
  }

}
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  // An array of variables to be passed through to the view
  protected $data = array();

	public function __construct() {
		parent::__construct();

		// Store iref if set in the query string
    if($this->input->get('iref')) {
        $this->session->set_userdata('iref', $this->input->get('iref'));
    } else {
    		$this->session->set_userdata('iref', 'iDRTV');
    }
	}

	public function index() {
		$this->load->view('front/index');
	}

  public function confirmation() {

		$data['lead'] = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'phone' => formatPhone($this->input->post('phone')),
			'address1' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'state' => $this->input->post('state'),
			'zipcode' => $this->input->post('zip'),
			'iref' =>  $this->session->userdata('iref')
		);

		$data['leadid'] = $this->lead_model->insert($data['lead']);

		if($data['leadid']) {
			$this->load->view('front/confirmation', $data);
		} else {
			$this->load->view('front/error');
		}

	}

  // public function bcrypt_pass($pass) {
  //   echo $this->bcrypt->hash_password($pass); exit();
  // }


}